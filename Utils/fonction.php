<?php 
     
function upload_pic(){
        if ((isset($_POST['add']) || isset($_POST['update'])) && $_POST['photo']){
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
            if (in_array($extension, $good_ext) AND $size <= $max_size AND $error == 0){
                $photo_name = uniqid('', true);
                $photo = $photo_name . '.' . $extension;
                move_uploaded_file($tmpname, './assets/uploaded_img/'.$photo);
            } else{
                echo "Votre photo a une mauvaise extension ou trop volumineux ou bien y a une erreur";
            }
        } else{
            if($_POST['genre'] == 'femme'){
                $photo = 'defaultgirl.jpg';
            }
            else if($_POST['genre'] == 'homme'){
                $photo = 'defaultboy.jpg';
            }
        }
        return $photo;
    }