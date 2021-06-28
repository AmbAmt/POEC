<?php

namespace App\Controller\Admin;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CircuitRepository;
use App\Repository\UserRepository;
use App\Entity\Circuit;
use App\Entity\User;
use App\Form\CircuitType;
use App\Repository\InscriptionRepository;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Utils\Utils;

class CourseController extends AbstractController
{
    /**
     * @Route("/admin/course", name="admin_consulter_course")
     */
    public function consulterCourse(Utils $utils): Response
    {
        $courses = $utils->dateProchaineCourse();
        return $this->render('admin/course/index.html.twig', [
            'courses' => $courses,
        ]);
    }
    
    /**
     * @Route("/admin/course/ajouter", name="admin_ajouter_course")
     */
    public function ajouterCourse(EntityManagerInterface $em, Request $request, CircuitRepository $repo, Utils $utils){

        $form = $this->createForm(CircuitType::class);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $test = true;
    
            $testDate = $repo->findBy(["date" => $form->get("date")->getData()]);
            //si il y a bien un circuit à la même date
            if($testDate==[]){ 
                $circuit = new Circuit;
                $circuit->setDate($form->get("date")->getData());
                $circuit->setNbPlaces($form->get("nb_places")->getData());
                $em->persist($circuit);
                $em->flush();
                $this->addFlash('success','Nouvelle course créée'); 
            }
            else{
                //on va vérifier qu'il n'y en as pas avec le même nombre de places 
                foreach($testDate as $key => $value){
                    //si il y  bien un circuit avec la même date 
                    if($testDate[$key]->getNbPlaces() == $form->get("nb_places")->getData()){
                        $this->addFlash('success', 'La course existe déjà');
                        $test = false;
                    }
                }
                if($test){
                        $circuit = new Circuit;
                        $circuit->setDate($form->get("date")->getData());
                        $circuit->setNbPlaces($form->get("nb_places")->getData());
                        $em->persist($circuit);
                        $em->flush();
                        $this->addFlash('success','Nouvelle course créée'); 
                }
            }
            $courses = $utils->dateProchaineCourse();
            return $this->render('admin/course/index.html.twig', [
                'courses' => $courses,
            ]);
        }

        return $this->render('admin/course/ajoutCourse.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/course/{course}", name="admin_reporter_course")
     */
    public function reporterCourse(Circuit $course,MailerInterface $mailer, UserRepository $repo, EntityManagerInterface $em){
       $date = $course->getDate();
       $date2= date_modify($date,'+1 week');
       $date2 = new \DateTime( $date->format("Y-m-d"));
       $course-> setDate($date2);
       $em->persist($course);
       $em->flush();
       $this->addFlash('success','La course a bien été reportée');

        //Ajout de touts les participants dans le tableau
       $tabParticipants = $repo->inscritCourse($course);

      foreach($tabParticipants as $participant){
        //construction et envoie du mail pour prévenir du changement de date
            $email=(new Email())
                ->from("projetmangopoec@gmail.com")
                ->to($participant->getEmail())
                ->subject("La course a été reportée")
                ->text(
                "Bonjour,
                La course à laquelle vous vous êtes inscrit vient d'être reportée d'une semaine.
                En vous remerciant de votre compréhension.
                Cordialement, l'équipe MX PARC");
            $mailer->send($email);
        }

        return $this->render('admin/course/index.html.twig', [
            'courses' => $course,
        ]);
    }

    /**
     * @Route("/admin/course/participants/{course}", name="admin_consulter_participants")
     */
    public function consulterParticipants(UserRepository $repo, Circuit $course ) : Response{
        
        $tabParticipants = $repo-> inscritCourse($course);
        return $this->render('admin/course/participants.html.twig',[
            "participants" => $tabParticipants,
            "course" => $course, 
            "places"=> $course->getNbPlaces()
        ]);
    }

    /**
     * @Route("/admin/course/supp/{user}/{circuit}", name="admin_supprimer_participants" , methods ="delete")
     */
    public function supprimerParticipants(InscriptionRepository $repoI, UserRepository $repoU, User $user, Circuit $circuit, 
    Request $request, EntityManagerInterface $em, MailerInterface $mailer){

        if ($this->isCsrfTokenValid("SUP".$user->getId().$circuit->getId(), $request->request->get('_token'))) {
            $repoI->deleteInscription($user, $circuit);
  
            $emailSupp=(new Email())
                ->from("projetmangopoec@gmail.com")
                ->to($user->getEmail())
                ->subject("Désinscription de la course")
                ->text(
                "Bonjour,
                Nous sommes au regret de vous annoncer que vous n'êtes plus inscrit à la prochaine course.
                Pour plus d'informations, merci de vous référer aux administrateurs.
                Cordialement, l'équipe MX PARC");
                $mailer->send($emailSupp);
        }
    
        //gestion de la liste d'attente 
        $tabParticipants= $repoU->inscritCourseListeAttente($circuit);
        foreach($tabParticipants as $participant){
            if($participant["listeAttente"]==1){
                
               $participantI= $repoI->findOneBy(["user" =>$participant["id"]]);
               $inscription=$repoI->find($participantI);
               $inscription->setListeAttente(0);
               $em->persist($inscription);
               $em->flush();             

               $participantU=$repoU->find($participant["id"]);
               //envoie du mail 
               $emailInscrit=(new Email())
                ->from("projetmangopoec@gmail.com")
                ->to($participantU->getEmail())
                ->subject("Inscritpion a la course : vous n'êtes plus sûr liste d'attente")
                ->text(
                "Bonjour,
                Nous avons le plaisir de vous annoncer que vous êtes officiellement inscrit à la prochaine course de motocross, une place venant de se libérer.
                Cordialement, l'équipe MX PARC");
                $mailer->send($emailInscrit);
                
                break;
            }  
        }
      
        $tabParticipants = $repoU-> inscritCourse($circuit);
        return $this->render('admin/course/participants.html.twig',[
            "participants" => $tabParticipants,
            "course" => $circuit,
            "places"=> $circuit->getNbPlaces()
        ]);
    }

    /**
     * @Route("/admin/couse/participants/pdf/{course}", name="admin_pdf")
     */
    public function genererPdf(UserRepository $repo, Circuit $course ){
        $tabParticipants = $repo-> inscritCourse($course);

        $dompdf= new Dompdf();

        if(count($tabParticipants)< $course->getNbPlaces()){
            $places = count($tabParticipants);
        }
        else{
            $places = $course->getNbPlaces();
        }
  
        $html = $this->renderView("admin/course/pdf.html.twig", [
            "participants" => $tabParticipants,
            "date" => $course->getDate(),
            "places" => $places
        ]);
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper("A4", "portrait");
        $dompdf->render();
        $dompdf->stream("listeEmargement.pdf",[
            "Attachment"=>false
        ]);
    }

    /**
     * @Route("/admin/courses/participants/{circuit}/{user}", name="admin_mail_licence")
     */
    public function envoyerMailLicence(User $user, MailerInterface $mailer, UserRepository $repo, Circuit $circuit){

        $email=(new Email())
            ->from("projetmangopoec@gmail.com")
            ->to($user->getEmail())
            ->subject("Numéro de licence")
            ->text(
            "Bonjour, 
            Merci de bien vouloir indiquer votre numéro de licence afin de pouvoir participer à la prochaine course de motocross.
            Si celle-ci n'est pas indiquée la veille de l'évènement nous serons contraints d'annuler votre inscription.
            En vous remerciant pour votre compréhension.
            Cordialement, l'équipe MX PARC");
        $mailer->send($email);
        
        $tabParticipants = $repo-> inscritCourse($circuit);
        return $this->render('admin/course/participants.html.twig',[
            "participants" => $tabParticipants,
            "course" => $circuit, 
            "places"=> $circuit->getNbPlaces()
        ]);
    }  
}