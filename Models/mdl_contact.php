<?php

class Mdl_contact
{
    public static function list_data()
    {
        $query = "SELECT * FROM contacts ORDER BY nom";
        return db_connect()->query($query)->fetchAll();
    }

    public static function save_data($nom,$email, $fonction)
    {
        $query = "INSERT INTO contacts(nom, email, fonction) VALUES (?,?,?)";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom,$email, $fonction));
    }

    public static function get_data($id)
    {
        $query = "SELECT * FROM contacts WHERE id=".$id;
        return db_connect()->query($query)->fetch();
    }

    public static function set_data($nom,$email, $fonction, $id)
    {
        $query = "UPDATE contacts SET nom = ?, email= ?,  fonction=? WHERE id=?";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom,$email, $fonction, $id));
    }
    
    public static function delete_data($id)
    {
        $query = "DELETE FROM contacts WHERE id =".$id;
        db_connect()->query($query);
    }
}
