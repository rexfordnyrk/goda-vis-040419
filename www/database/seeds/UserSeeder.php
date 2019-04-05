<?php
/**
 * Created by PhpStorm.
 * User: ignis
 * Date: 17/11/18
 * Time: 16:33
 */

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {

        $users = array(
            array('id' => '19','username' => 'MD','fname' => 'Kwame ','lname' => 'Owusu-Antwi ','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'koajay75@yahoo.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-02-15 09:38:10','updated_at' => NULL),
            array('id' => '27','username' => 'ignis','fname' => 'Rexford','lname' => 'Nyarko','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'ignis1z@yopmail.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-02-22 19:00:19','updated_at' => NULL),
            array('id' => '113','username' => 'Aaron','fname' => 'Aaron','lname' => 'Lamptey','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'aaron.lampteykcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-04 17:53:21','updated_at' => NULL),
            array('id' => '116','username' => 'William','fname' => 'William','lname' => 'Nyeha','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'william.nyehakcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-06 17:25:42','updated_at' => NULL),
            array('id' => '117','username' => 'Daniel','fname' => 'Daniel','lname' => 'Boamah','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'daniel.boamahkcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-06 17:31:43','updated_at' => NULL),
            array('id' => '118','username' => 'Rahman','fname' => 'Rahman','lname' => 'Eduah','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'rahman.eduahkcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-06 17:35:20','updated_at' => NULL),
            array('id' => '119','username' => 'Julie','fname' => 'Juliana','lname' => 'Owusu','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'juliana.owusukcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-06 17:40:24','updated_at' => NULL),
            array('id' => '121','username' => 'Rebecca','fname' => 'Rebecca','lname' => 'Krah','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'rebecca.krahkcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-06 17:48:41','updated_at' => NULL),
            array('id' => '122','username' => 'Philemon','fname' => 'Philemon','lname' => 'Baidoo','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'philemon.baidookcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-06 17:51:26','updated_at' => NULL),
            array('id' => '123','username' => 'Richard','fname' => 'Richard','lname' => 'Ampare','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'richard.amparekcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-06 18:26:13','updated_at' => NULL),
            array('id' => '133','username' => 'Justine','fname' => 'Justine','lname' => 'Agbavor','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'justine.agbavorkcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-08 16:03:50','updated_at' => NULL),
            array('id' => '134','username' => 'Isaac','fname' => 'Isaac','lname' => 'Baffour','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'isaac.baffourkcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-08 16:06:01','updated_at' => NULL),
            array('id' => '135','username' => 'Karim','fname' => 'Karim','lname' => 'Eduah','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'karim.eduahkcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-08 16:08:54','updated_at' => NULL),
            array('id' => '136','username' => 'Lucy','fname' => 'Lucy','lname' => 'Antwi','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'lucy.antwikcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-08 16:29:30','updated_at' => NULL),
            array('id' => '137','username' => 'Thomas','fname' => 'Thomas','lname' => 'Amissah','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'thomas.amissahkcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-08 16:46:27','updated_at' => NULL),
            array('id' => '138','username' => 'Mildred','fname' => 'Mildred','lname' => 'Osei Owusu','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'mildred.oseiowusukcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-08 16:51:20','updated_at' => NULL),
            array('id' => '141','username' => 'kofig','fname' => 'kofi','lname' => 'Ghana','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'kofig@hotmail.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-05-09 12:07:22','updated_at' => NULL),
            array('id' => '145','username' => 'Cecilia','fname' => 'Cecilia','lname' => 'Atibilah','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'cecilia.atibilakcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-06-25 10:07:20','updated_at' => NULL),
            array('id' => '146','username' => 'Ruth','fname' => 'Ruth','lname' => 'Karisuma','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'ruth.karisumakcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-06-25 10:08:43','updated_at' => NULL),
            array('id' => '150','username' => 'Sarah','fname' => 'Sarah','lname' => 'Agyapong','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'sarah.agyapongkcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-07-22 22:37:13','updated_at' => NULL),
            array('id' => '151','username' => 'Collins','fname' => 'Collins ','lname' => 'Opare','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'collins.oparekcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-07-22 22:42:16','updated_at' => NULL),
            array('id' => '152','username' => 'Patricia','fname' => 'Patricia','lname' => 'Opoku','phone' => '0541551097','photo' => 'img/unknown.png','email' => 'patricia.opokukcl@koajay.com','email_verified_at' => NULL,'password' => '12347','remember_token' => NULL,'created_at' => '2018-10-16 08:41:53','updated_at' => NULL)
        );
        // Reset cached roles and permissions
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($users as $user){
            User::create($user);
        }

        $userroles = array(
            array( 'id' =>19,'role' =>'administrator' ),
            array( 'id' =>27,'role' =>'administrator' ),
            array( 'id' =>113,'role' =>'administrator' ),
            array( 'id' =>116,'role' =>'agent' ),
            array( 'id' =>117,'role' =>'agent' ),
            array( 'id' =>118,'role' =>'agent' ),
            array( 'id' =>119,'role' =>'supervisor' ),
            array( 'id' =>121,'role' =>'agent' ),
            array( 'id' =>122,'role' =>'supervisor' ),
            array( 'id' =>123,'role' =>'agent' ),
            array( 'id' =>133,'role' =>'agent' ),
            array( 'id' =>134,'role' =>'supervisor' ),
            array( 'id' =>135,'role' =>'supervisor' ),
            array( 'id' =>136,'role' =>'agent' ),
            array( 'id' =>137,'role' =>'supervisor' ),
            array( 'id' =>138,'role' =>'agent' ),
            array( 'id' =>141,'role' =>'manager' ),
            array( 'id' =>145,'role' =>'agent' ),
            array( 'id' =>146,'role' =>'agent' ),
            array( 'id' =>150,'role' =>'agent' ),
            array( 'id' =>151,'role' =>'agent' ),
            array( 'id' =>152,'role' =>'agent' ),
        );

        foreach ($userroles as $userrole){
            User::find($userrole['id'])->assignRole($userrole['role']);
        }

        // create user
        $user = User::create([
            'id' => '1',
            'username' => 'syssupport',
            'fname' => 'system',
            'lname' => 'support',
            'email' => 'support@innoverex.com',
            'phone' => '0262565566',
            'password' => 'onlyadmin',
        ]);


        // assign role to user
        $user->assignRole(['sysadmin']);

    }
}

