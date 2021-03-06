<?php

class actionImagesPresetsAdd extends cmsAction {

    public function run(){

        $images_model = cmsCore::getModel('images');

        $form = $this->getForm('preset', array('add'));

        $is_submitted = $this->request->has('submit');

        $preset = array();

        if ($is_submitted){

            $preset = $form->parse($this->request, $is_submitted);

            $errors = $form->validate($this,  $preset);

            if (!$errors){

                $id = $images_model->addPreset($preset);

                $this->redirectToAction('presets');

            }

            if ($errors){

				cmsUser::addSessionMessage(LANG_FORM_ERRORS, 'error');

            }

        }

        return cmsTemplate::getInstance()->render('backend/preset', array(
            'do' => 'add',
            'preset' => $preset,
            'form' => $form,
            'errors' => isset($errors) ? $errors : false
        ));

    }

}
