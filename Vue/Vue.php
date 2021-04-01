<?php

class Vue {

    private string $file;
    private string $content;
    private string $title;

    public function __construct($action)
    {
        $this->file = 'Vue/vue'.$action.'.php';
    }

    public function generate($data) {
        $content = $this->generateFile($this->file, $data);
        $vue = $this->generateFile('Vue/template.php', array('title'=>$this->title));

        echo $vue;
    }

    public function generateVue()
    {
        $vue = $this->generateFile('Vue/template.php');
    }

    private function generateFile($file){
        if(file_exists($file)){
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else {
            throw new Exception('Vue.php error, '.$file.'is missing');
        }
    }

    private function generateFileWithData($file, $data){
        if(file_exists($file)){
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else {
            throw new Exception('Vue.php error, '.$file.'is missing');
        }
    }

}