<h1 class="page-header">News</h1>
<table class="table">
    <?php
    foreach ($news as $key => $value){
        echo
            '<tr>
        <td>' . $value->getId() . '</td>
        <td>' . $value->getDate() . '</td>
        <td>' . $value->getTitle() . '</td>
        <td>' . $value->getContent() . '</td>
    </tr>';
    }
    ?>
</table>

<?php
    $pagination->draw()
?>
