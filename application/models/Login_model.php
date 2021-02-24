<?php
class Login_model extends CI_Model
{
    function can_login($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('administrator');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                if($row->is_email_verified == 'yes')
                {
                    $store_password = $row->password;
                    $pp = md5($password);
                    if($pp == $store_password)
                    {
                        if ($row->idrole==2) 
                        {
                            $this->session->set_userdata('id', $row->id);
                        }
                        elseif ($row->idrole==1) 
                        {
                            $this->session->set_userdata('admin_login', $row->id);
                        }
                        else 
                        {
                            $this->session->set_userdata('instuctor_login', $row->id);
                        }
                    
                    }
                    else
                    {
                    return 'information incorrecte';
                    }
                }
                else
                {
                return 'veillez vérifier votre boite email!!!!';
                }
            }
        }
        else
        {
        return 'Wrong Email Address';
        }
    }


    function can_recuperation($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('administrator');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                if($row->is_email_verified == 'yes')
                {
                   

                    // if ($row->idrole==2) 
                    // {
                    //     $this->session->set_userdata('id', $row->id);
                    // }
                    // elseif ($row->idrole==1) 
                    // {
                    //     $this->session->set_userdata('admin_login', $row->id);
                    // }
                    // else 
                    // {
                    //     $this->session->set_userdata('instuctor_login', $row->id);
                    // }
                    
                }
                else
                {
                return "Prière de vérifier votre adresse email pour l'activation du compte";
                }
            }
        }
        else
        {
        return 'Adresse email non trouvée!!!!';
        }
    }



}

?>