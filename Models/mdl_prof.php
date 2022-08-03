<?php

class Mdl_prof
{
    public static function list_data()
    {
        $query = "SELECT * FROM profs ORDER BY id";
        return db_connect()->query($query)->fetchAll();
    }

    public static function save_data($nom,$prenom, $email, $photo,$mdp)
    {
        $query = "INSERT INTO profs(nom, prenom, email, photo,mdp) VALUES (?,?,?,?,?)";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom,$prenom, $email, $photo,$mdp));
    }

    public static function get_data($id)
    {
        $query = "SELECT * FROM profs WHERE id=".$id;
        return db_connect()->query($query)->fetch();
    }

    public static function set_data($nom, $prenom, $email, $photo,$mdp, $id)
    {
        $query = "UPDATE profs SET nom = ?, prenom=?, email= ?,photo=?, mdp=? WHERE id=?";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom,$prenom, $email, $photo,$mdp, $id));
    }
    
    public static function delete_data($id)
    {
        $query = "DELETE FROM profs WHERE id =".$id;
        $query_d = "DELETE FROM modules WHERE id_prof =".$id;
        db_connect()->query($query);
        db_connect()->query($query_d);
    }

    public static function module($id)
    {
        $query = "SELECT m.nom from modules m JOIN profs p ON m.id_prof = p.id WHERE m.id_prof =".$id;
        return db_connect()->query($query)->fetchAll();
    }
}
