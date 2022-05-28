<?php

class ProsesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		if(isset(Yii::app()->user->group)){
			$group = Yii::app()->user->group;
			// jika member:			
			if($group=="member"){
				return array(
					array('allow',  // allow all users to perform 'index' and 'view' actions
						'actions'=>array('beli','keranjang','transaksi','checkout',
									'unggah','view'),
						'users'=>array('*'),
					),					
					array('deny',  // deny all users
						'users'=>array('*'),
					),
				);
			}
			else if($group=="admin"){
				return array(
					array('allow',  // allow all users to perform 'index' and 'view' actions
						'actions'=>array('daftarpesan','view','validasi'),
						'users'=>array('*'),
					),					
					array('deny',  // deny all users
						'users'=>array('*'),
					),
				);
			}
		}
		return array(
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionView($id)
    {
		$model = Transaksi::model()->findByPk($id);
		$file_view = 'detail';
		if(Yii::app()->user->group=='admin'){
			$file_view = 'detail-admin';
		}
        $this->render($file_view,array(
            'model'=>$model,
        ));
    }
	
	public function actionValidasi($id)
    {
		$model = Transaksi::model()->findByPk($id);
		$model->traStatus=$_GET['bayar']??0;
		$model->save();
		$this->redirect(array('view','id'=>$id));
	}
	
	public function actionUnggah($id)
    {
		$model = Transaksi::model()->findByPk($id);
		//print_r($_FILES);
		if(isset($_FILES['bukti'])){
			$file='gambar/bukti/'.$_FILES['bukti']['name'];
			move_uploaded_file(
				$_FILES['bukti']['tmp_name'],
				$file
			);
			$model->traBuktiBayar = $file;
			$model->save();
			$this->redirect(array('view','id'=>$id));
		}
    }
	
	public function actionBeli($id)
	{
		$barang = Pakaian::model()->findByPk($id);
		if(isset($_POST['jumlah'])){
			if(!isset($_SESSION['keranjang'])){
				$_SESSION['keranjang']=array();
			}
			$_SESSION['keranjang'][]=array(
				'ptKdPakaian' =>$barang->kd_pakaian,
				'ptJumlah'	  =>$_POST['jumlah'],
				'ptTotal'	  =>$_POST['jumlah']*$barang->hrg_pakaian,
				'harga'=>$barang->hrg_pakaian,
				'nama'=>$barang->nm_pakaian,
				'gambar'=>$barang->gmbr_pakaian,
			);
			$this->redirect(array('keranjang'));
		}
		$this->render('view',array(
			'model'=>$barang
		));
		
	}
	
	public function actionKeranjang()
	{
		if(isset($_GET['index'])){
			$index= $_GET['index'];
			if(isset($_SESSION['keranjang']) &&
				isset($_SESSION['keranjang'][$index])
			){
				unset($_SESSION['keranjang'][$index]);
			}
		}
		$this->render('keranjang');
	}
	
	public function actionCheckout()
	{
		echo "Checkout dengan total ".$_GET['total'];
		// 1. buat transaksi:
		$trans = new Transaksi;
		$trans->traNoFaktur = rand(90000,30000); 
		$trans->traTotal    = $_GET['total'];
		$trans->traTgl		= date('Y-m-d H:i:s');
		$trans->traUser		= Yii::app()->user->getId();
		$trans->save();
		// 2. simpan detil
		foreach($_SESSION['keranjang'] as $k){
			$p_trans = new PakaiTrans;
			$p_trans->ptKdPakaian = $k['ptKdPakaian'];
			$p_trans->ptTraId	  = $trans->traId;
			$p_trans->ptJumlah	  = $k['ptJumlah'];
			$p_trans->ptTotal	  = $k['ptTotal'];
			$p_trans->save();
		}
		unset($_SESSION['keranjang']);
		$this->redirect(array('transaksi'));
	}
	
	public function actionTransaksi()
	{
		$model=new Transaksi('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Transaksi']))
            $model->attributes=$_GET['Transaksi'];

        $this->render('admikn',array(
            'model'=>$model,
        ));
	}
	
	public function actionDaftarpesan()
	{
		$model=new Transaksi('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Transaksi']))
            $model->attributes=$_GET['Transaksi'];

        $this->render('admin',array(
            'model'=>$model,
        ));
	}
}
