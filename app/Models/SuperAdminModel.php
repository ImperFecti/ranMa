<?php

namespace App\Models;

use CodeIgniter\Model;

class SuperAdminModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'username', 'active', 'password_hash'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getAdminUsers($id = false)
    {
        return $this->select('users.id, users.email, users.username, users.active, auth_groups.name as group_name')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id', 'left') // Join with auth_groups_users
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id', 'left') // Join with auth_groups
            ->where('auth_groups.name !=', 'superadmin') // Exclude superadmin users
            ->findAll();

        if ($id !== false) {
            $this->where('users.id !=', $id); // Exclude logged-in admin user if ID is provided
        }
    }
}
