<?php //                      ___A___        :     FINAL  CLASS  SINGLETON.
 final      class             ___A___        {
    private static           $___A___;
    private function       __construct       (               ){
            require_once('N0T_XER0/X0R_MVC/Model.php'        );
            require_once('N0T_XER0/X0R_MVC/View.php'         );
            require_once('N0T_XER0/X0R_MVC/Kontrollant.php'  );}
    public  static  function  ___A___        (               ){
                             $___B___        =   __CLASS__   ; return(
             self  ::        $___A___        )?
             self  :         $___A___        =   new 
		                     $___B___        ;}
    public  function          ___D___        ( & $flag , & $option   ){
      $___C___ =       new    ___C___        (   $flag ,   $option   );
      $___C___ =    $___C___->   get(       );
         echo       $___C___->  show(       );}
	public function          __clone(       ) {trigger_error            (
	                 'Clone is not allowed.',DEAFULT_ERROR            );}}
$___E___ = ( $_POST[ 'observer' ])? $_POST[ 'observable' ]: $DEAFULT_BODY   ;
$___F___ = ( $_GET [ 'flag'   ])? $_GET [ 'flag'      ]:  DEAFULT_FLAG;
$___G___ = &___A___::___A___(  ); $___G___->___D___($___F___, $___E___);?>
