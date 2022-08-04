<?php

class Mdl_etudiant
{
    public static function list_data()
    {
        $query = "SELECT * FROM etudiants ORDER BY nom";
        return db_connect()->query($query)->fetchAll();
    }

    public static function save_data($nom,$prenom,$date_naissance,$cin,$email,$tel,$comptefb,$photo,$genre,$password)
    {
        $query = "INSERT INTO etudiants(nom,prenom,date_naissance,cin,email,tel,comptefb,photo,genre,password) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom,$prenom,$date_naissance,$cin,$email,$tel,$comptefb,$photo,$genre,$password));
    }

    public static function get_data($id)
    {
        $query = "SELECT * FROM etudiants WHERE id=".$id;
        return db_connect()->query($query)->fetch();
    }

    public static function set_data($nom,$prenom,$date_naissance,$cin,$email,$tel,$comptefb,$photo,$genre,$password, $id)
    {
        $query = "UPDATE etudiants SET nom = ?,prenom = ?,date_naissance = ?,cin = ?,email = ?,tel = ?,comptefb = ?,photo = ?,genre = ?,password = ? WHERE id=?";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom,$prenom,$date_naissance,$cin,$email,$tel,$comptefb,$photo,$genre,$password, $id));
    }
    
    public static function delete_data($id)
    {
        $query = "DELETE FROM etudiants WHERE id =".$id;
        db_connect()->query($query);
    }
}
