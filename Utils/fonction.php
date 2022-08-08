<?php 

function upload_pic($s)
{

            
    $tmpname = $_FILES["photo"]["tmp_name"]; 
    if ($tmpname != NULL) //Pour vérifier si il y a une photo insérée
    {
        if (isset($_POST['add']) || isset($_POST['update']))//Si ce sont bien les ajouts ou les modifications avec des photos insérées

        {
            $tmpname = $_FILES["photo"]["tmp_name"];
            $name = $_FILES["photo"]["name"];
            $error = $_FILES["photo"]["error"];
            $size = $_FILES["photo"]["size"];


            $extension = explode('.', $name);
            $extension = strtolower(end($extension));
            $good_ext = ['jpg', 'jpeg', 'png', 'gif'];
            $max_size = 5000000;
            

            var_dump(in_array($extension, $good_ext));
            var_dump($error == 0);
            var_dump($size <= $max_size);

            if (in_array($extension, $good_ext) AND $size <= $max_size AND $error == 0)
            {
                $photo_name = uniqid('', true);
                $photo = $photo_name . '.' . $extension;
                move_uploaded_file($tmpname, './assets/uploaded_img/'.$photo);
            } 
            else
            {
                echo "Votre photo a une mauvaise extension ou trop volumineux ou bien y a une erreur";
            }
        }
    }


    else    //Sinon: C'est-à-dire qu'il n'y a pas eu de photo insérée
    {
        if (isset($_POST['add'])) //Si l'utilisateur a fait un ajout sans pour autant insérer une photo, on met les photos par défaut
        {
            if( $_POST['genre'] == 'homme') 
            {
                $photo = 'defaultboy.jpg';    
            }
            else
            {
                $photo = 'defaultgirl.jpg';    
            }
        }
        else
        {   //On renvoi l'url de la photo précédente    
            $prof = Mdl_prof::get_data($_POST['id']);
            $etudiant = Mdl_etudiant::get_data($_POST['id']);

            if ($s == 'prof') 
            {
                $photo =  $prof["photo"];     
            }
            else
            {
                $photo = $etudiant["photo"];
            }
            
        }

    }



return $photo;
}