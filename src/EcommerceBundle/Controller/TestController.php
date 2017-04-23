<?php

namespace EcommerceBundle\Controller;

use EcommerceBundle\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller {

    public function ajoutAction() {
        
        $em = $this->getDoctrine()->getManager();
        
     /*   $produit = new Produits();
        $produit->setCategorie('Legume');
        $produit->setDescription('La tomate se mange');
        $produit->setDisponible('1');
        $produit->setImage('https://www.google.fr/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiu0b_ro7vTAhULWhoKHZSzARcQjRwIBw&url=http%3A%2F%2Fwww.vitaprim.com%2Fnos-produits%2Flegumes%2Ftomate%2F&psig=AFQjCNFtqophrILc_6yEkYDkeYymt36SNA&ust=1493061008595177');
        $produit->setNom('Tomate');
        $produit->setPrix('0.99');
        $produit->setTva('19.6');
        
        $produit1 = new Produits();
        $produit1->setCategorie('Fruit');
        $produit1->setDescription('La pomme se mange');
        $produit1->setDisponible('2');
        $produit1->setImage('http://www.mr-plantes.com/wp-content/uploads/2014/04/pommes.jpg');
        $produit1->setNom('Pomme');
        $produit1->setPrix('0.90');
        $produit1->setTva('19.6');
        
        $em->persist($produit);
        $em->persist($produit1);
        $em->flush();*/
        
        
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();


        return $this->render('EcommerceBundle:Default:test.html.twig', array('produits'=>$produits));
    }

}
