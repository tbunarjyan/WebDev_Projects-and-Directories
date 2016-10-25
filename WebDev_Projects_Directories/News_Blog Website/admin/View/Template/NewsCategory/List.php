<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">News Categories</h1>
            <table class="table">
                <?php
                foreach ($newsCategories as $key => $value){
                    echo
                        '<tr>
                    <td>' . $value->getId() . '</td>
                    <td>' . $value->getTitle() . '</td>
                </tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
