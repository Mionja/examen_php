<?php

class Mdl_module
{
    public static function list_data()
    {
        $query = "SELECT * FROM modules ORDER BY nom";
        return db_connect()->query($query)->fetchAll();
    }

    public static function save_data($nom, $code, $heure,$id_prof)
    {
        $query = "INSERT INTO modules(nom, code, heure,id_prof) VALUES (?,?,?,?)";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom, $code, $heure,$id_prof));
    }

    public static function get_data($id)
    {
        $query = "SELECT * FROM modules WHERE id=".$id;
        return db_connect()->query($query)->fetch();
    }

    public static function set_data($nom, $code, $heure,$id_prof, $id)
    {
        $query = "UPDATE modules SET nom = ?, code= ?, heure = ?,id_prof=? WHERE id=?";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom, $code, $heure,$id_prof, $id));
    }
    
    public static function delete_data($id)
    {
        $query = "DELETE FROM modules WHERE id =".$id;
        db_connect()->query($query);
    }
}
