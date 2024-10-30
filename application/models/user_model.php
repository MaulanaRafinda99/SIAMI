<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
    public function getUsers($limit, $start, $user, $keyword = null)
    {
        // Administrator
        if ($user == 1) {
            if ($keyword !== null) {
                $query = "
                    SELECT u.id_user, u.username, u.level, l.level as level 
                    FROM akun u, user_level l 
                    WHERE u.level = l.id 
                    AND (u.username LIKE '%$keyword%' OR l.level LIKE '%$keyword%') 
                    LIMIT $start, $limit
                ";
            } else {
                $query = "
                    SELECT u.id_user, u.username, u.level, l.level as level 
                    FROM akun u, user_level l 
                    WHERE u.level = l.id 
                    LIMIT $start, $limit
                ";
            }
        }
        // Admin Prodi
        elseif ($user == 2) {
            if ($keyword !== null) {
                $query = "
                    SELECT u.id_user, u.username, u.level, l.level as level 
                    FROM akun u, user_level l 
                    WHERE u.level = l.id 
                    AND u.level != '1' AND u.level != '2' 
                    AND (u.username LIKE '%$keyword%' OR l.level LIKE '%$keyword%') 
                    LIMIT $start, $limit
                ";
            } else {
                $query = "
                    SELECT u.id_user, u.username, u.level, l.level as level 
                    FROM akun u, user_level l 
                    WHERE u.level != '1' AND u.level != '2' 
                    AND u.level = l.id 
                    LIMIT $start, $limit
                ";
            }
        }
        // Default case if $user is neither 1 nor 2
        else {
            $query = "
                SELECT u.id_user, u.username, u.level, l.level as level 
                FROM akun u, user_level l 
                WHERE u.level = l.id 
                LIMIT $start, $limit
            ";
        }

        return $this->db->query($query)->result_array();
    }

    public function get_akun($id = null)
    {
        if ($id !== null) {
            $query = "
                SELECT a.id_user, a.username, l.level 
                FROM akun a, user_level l 
                WHERE a.level = l.id 
                AND a.id_user = $id
            ";
        } else {
            $query = "
                SELECT a.id_user, a.username, l.level 
                FROM akun a, user_level l 
                WHERE a.level = l.id
            ";
        }

        return $this->db->query($query)->result_array();
    }
}




