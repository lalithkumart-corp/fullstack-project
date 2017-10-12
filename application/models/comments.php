<?php
class Comments extends CI_Model{
    public function __construct(){

    }
    public function getComments(){
        $anObj = file_get_contents('comments.json');
        return json_decode($anObj);
    }
    public function updateComments(){
        $comments = file_get_contents('comments.json');
        $commentsDecoded = json_decode($comments, true);
        $commentsDecoded[] = [
            'id'      => round(microtime(true) * 1000),
            'author'  => $_POST['author'],
            'text'    => $_POST['text']
        ];
        $comments = json_encode($commentsDecoded, JSON_PRETTY_PRINT);
        file_put_contents('comments.json', $comments);
        return 'Success';
    }
}
?>

