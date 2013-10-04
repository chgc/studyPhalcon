<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kevin
 * Date: 2013/10/4
 * Time: 下午 11:22
 * To change this template use File | Settings | File Templates.
 */
class SignupController  extends \Phalcon\Mvc\Controller
{
    public function indexAction(){

    }

    public function registerAction()
    {
        $user = new Users();

        //Store and check for errors
        $success = $user->save($this->request->getPost(), array('name', 'email'));

        if ($success) {
            echo "Thanks for register!";
        } else {
            echo "Sorry, the following problems were generated: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }
}