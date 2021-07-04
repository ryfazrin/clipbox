<?php
if (!defined('CONF_STRUCTURE')) {
	header('location:index.html');
	exit;
}

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login'] == 0) {
	header('location:index.php');
	exit;
}

/**
 *
 */
class Komik extends PoCore
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if (!$this->auth($_SESSION['leveluser'], 'komik', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
    ?>
    <div class="block-content">
      <div class="row">
        <div class="col-md-12">
          <?=$this->pohtml->headTitle('Komik', '
            <div class="btn-title pull-right">
              <a href="admin.php?mod=komik&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
            </div>
          ');?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=komik&act=multidelete', 'autocomplete' => 'off'));?>
            <?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
            <?php
              $columns = array(
                array('title' => 'Id', 'options' => 'style="width:30px;"'),
                array('title' => 'Title', 'options' => ''),
                array('title' => 'Genres', 'options' => ''),
                array('title' => 'Date', 'options' => ''),
                array('title' => 'Headline', 'options' => 'style="width:50px;"'),
                array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
              );
            ?>
            <?=$this->pohtml->createTable(array('id' => 'table-komik', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
          <?=$this->pohtml->formEnd();?>
        </div>
      </div>
    </div>
    <?=$this->pohtml->dialogDelete('komik');?>
    <?php
  }

  public function datatable()
  {
    if (!$this->auth($_SESSION['leveluser'], 'komik', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
    $table = 'komik';
    $primarykey = 'id_komik';
    $columns = array(
      array('db' => $primarykey, 'dt' => '0', 'field' => $primarykey,
        'formatter' => function($d, $row, $i){
          return "<div class='text-center'>\n
            <input type='checkbox' id='titleCheckdel' />\n
            <input type='hidden' class='deldata' name='item[".$i."][deldata]' value='".$d."' disabled />\n
          </div>\n";
        }
      ),
      array('db' => $primarykey, 'dt' => '1', 'field' => $primarykey),
      array('db' => 'title', 'dt' => '2', 'field' => 'title'),
      // array('db' => 'url', 'dt' => '3', 'field' => 'url',
      //   'formatter' => function($d, $row, $i){
      //     return "<a href='".$d."' target='_blank'>".$d."</a>n";
      //   }
      // ),
      array('db' => 'genres', 'dt' => '3', 'field' => 'genres'),
      array('db' => 'release_date', 'dt' => '4', 'field' => 'release_date'),
      array('db' => 'headline', 'dt' => '5', 'field' => 'headline',
        'formatter' => function($d, $row, $i){
          return "<div class='text-center'>".$d."</div>\n";
        }
      ),
      array('db' => $primarykey, 'dt' => '6', 'field' => $primarykey,
        'formatter' => function($d, $row, $i){
          return "<div class='text-center'>\n
            <div class='btn-group btn-group-xs'>\n
              <a href='admin.php?mod=komik&act=edit&id=".$row['id_komik']."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>\n
              <a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
            </div>\n
          </div>\n";
        }
      )
    );
    echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));
  }

  public function addnew()
  {
    if (!$this->auth($_SESSION['leveluser'], 'komik', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
    
  }

  public function edit()
  {
    if (!$this->auth($_SESSION['leveluser'], 'komik', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
    
  }

  public function delete()
  {
    if (!$this->auth($_SESSION['leveluser'], 'komik', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
    
  }

  public function multidelete()
  {
    if (!$this->auth($_SESSION['leveluser'], 'komik', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
    
  }
}

 ?>
