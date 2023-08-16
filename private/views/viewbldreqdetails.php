<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>Blood Request Details</title>


<link rel="stylesheet" href="<?=ROOT?>/css/temp.css">

<div class="section">
    <div class="boxrow">
        <div class="boxi">
            <div class="ttl">
                <h2>RBC</h2>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                    <tr>
                        <td>A+</td>
                        <td><?=$rows->rAp?></td>
                        <?php if($rows->rAp>0 && isset($_SESSION['bld']['rAp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->rAp>0 && isset($_SESSION['bld']['rAp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->rAp>0){ ?>
                            <td><a href="<?=ROOT?>/Rbcbldreqdetails?amnt=<?=$rows->rAp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                        
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td><?=$rows->rAn?></td>
                        <?php if($rows->rAn>0 && isset($_SESSION['bld']['rAn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->rAn>0 && isset($_SESSION['bld']['rAn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->rAn>0){ ?>
                            <td><a href="<?=ROOT?>/Rbcbldreqdetails/index2?amnt=<?=$rows->rAn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><?=$rows->rBp?></td>
                        <?php if($rows->rBp>0 && isset($_SESSION['bld']['rBp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->rBp>0 && isset($_SESSION['bld']['rBp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->rBp>0){ ?>
                            <td><a href="<?=ROOT?>/Rbcbldreqdetails/index3?amnt=<?=$rows->rBp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td><?=$rows->rBn?></td>
                        <?php if($rows->rBn>0 && isset($_SESSION['bld']['rBn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->rBn>0 && isset($_SESSION['bld']['rBn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->rBn>0){ ?>
                            <td><a href="<?=ROOT?>/Rbcbldreqdetails/index4?amnt=<?=$rows->rBn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><?=$rows->rABp?></td>
                        <?php if($rows->rABp>0 && isset($_SESSION['bld']['rABp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->rABp>0 && isset($_SESSION['bld']['rABp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->rABp>0){ ?>
                            <td><a href="<?=ROOT?>/Rbcbldreqdetails/index5?amnt=<?=$rows->rABp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td><?=$rows->rABn?></td>
                        <?php if($rows->rABn>0 && isset($_SESSION['bld']['rABn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->rABn>0 && isset($_SESSION['bld']['rABn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->rABn>0){ ?>
                            <td><a href="<?=ROOT?>/Rbcbldreqdetails/index6?amnt=<?=$rows->rABn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><?=$rows->rOp?></td>
                        <?php if($rows->rOp>0 && isset($_SESSION['bld']['rOp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->rOp>0 && isset($_SESSION['bld']['rOp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->rOp>0){ ?>
                            <td><a href="<?=ROOT?>/Rbcbldreqdetails/index7?amnt=<?=$rows->rOp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td><?=$rows->rOn?></td>
                        <?php if($rows->rOn>0 && isset($_SESSION['bld']['rOn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->rOn>0 && isset($_SESSION['bld']['rOn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->rOn>0){ ?>
                            <td><a href="<?=ROOT?>/Rbcbldreqdetails/index8?amnt=<?=$rows->rOn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                </table>
            </div>
        </div>
        <div class="boxi">
            <div class="ttl">
                <h2>WBC</h2>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                    <tr>
                        <td>A+</td>
                        <td><?=$rows->wAp?></td>
                        <?php if($rows->wAp>0 && isset($_SESSION['bld']['wAp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->wAp>0 && isset($_SESSION['bld']['wAp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->wAp>0){ ?>
                            <td><a href="<?=ROOT?>/Wbcbldreqdetails?amnt=<?=$rows->wAp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                        
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td><?=$rows->wAn?></td>
                        <?php if($rows->wAn>0 && isset($_SESSION['bld']['wAn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->wAn>0 && isset($_SESSION['bld']['wAn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->wAn>0){ ?>
                            <td><a href="<?=ROOT?>/Wbcbldreqdetails/index2?amnt=<?=$rows->wAn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><?=$rows->wBp?></td>
                        <?php if($rows->wBp>0 && isset($_SESSION['bld']['wBp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->wBp>0 && isset($_SESSION['bld']['wBp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->wBp>0){ ?>
                            <td><a href="<?=ROOT?>/Wbcbldreqdetails/index3?amnt=<?=$rows->wBp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td><?=$rows->wBn?></td>
                        <?php if($rows->wBn>0 && isset($_SESSION['bld']['wBn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->wBn>0 && isset($_SESSION['bld']['wBn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->wBn>0){ ?>
                            <td><a href="<?=ROOT?>/Wbcbldreqdetails/index4?amnt=<?=$rows->wBn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><?=$rows->wABp?></td>
                        <?php if($rows->wABp>0 && isset($_SESSION['bld']['wABp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->wABp>0 && isset($_SESSION['bld']['wABp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->wABp>0){ ?>
                            <td><a href="<?=ROOT?>/Wbcbldreqdetails/index5?amnt=<?=$rows->wABp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td><?=$rows->wABn?></td>
                        <?php if($rows->wABn>0 && isset($_SESSION['bld']['wABn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->wABn>0 && isset($_SESSION['bld']['wABn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->wABn>0){ ?>
                            <td><a href="<?=ROOT?>/Wbcbldreqdetails/index6?amnt=<?=$rows->wABn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><?=$rows->wOp?></td>
                        <?php if($rows->wOp>0 && isset($_SESSION['bld']['wOp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->wOp>0 && isset($_SESSION['bld']['wOp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->wOp>0){ ?>
                            <td><a href="<?=ROOT?>/Wbcbldreqdetails/index7?amnt=<?=$rows->wOp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td><?=$rows->wOn?></td>
                        <?php if($rows->wOn>0 && isset($_SESSION['bld']['wOn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->wOn>0 && isset($_SESSION['bld']['wOn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->wOn>0){ ?>
                            <td><a href="<?=ROOT?>/Wbcbldreqdetails/index8?amnt=<?=$rows->wOn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="boxrow">
        <div class="boxi">
            <div class="ttl">
                <h2>Platelettes</h2>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                    <tr>
                        <td>A+</td>
                        <td><?=$rows->pltAp?></td>
                        <?php if($rows->pltAp>0 && isset($_SESSION['bld']['pltAp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->pltAp>0 && isset($_SESSION['bld']['pltAp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->pltAp>0){ ?>
                            <td><a href="<?=ROOT?>/Pltbldreqdetails?amnt=<?=$rows->pltAp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                        
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td><?=$rows->pltAn?></td>
                        <?php if($rows->pltAn>0 && isset($_SESSION['bld']['pltAn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->pltAn>0 && isset($_SESSION['bld']['pltAn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->pltAn>0){ ?>
                            <td><a href="<?=ROOT?>/Pltbldreqdetails/index2?amnt=<?=$rows->pltAn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><?=$rows->pltBp?></td>
                        <?php if($rows->pltBp>0 && isset($_SESSION['bld']['pltBp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->pltBp>0 && isset($_SESSION['bld']['pltBp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->pltBp>0){ ?>
                            <td><a href="<?=ROOT?>/Pltbldreqdetails/index3?amnt=<?=$rows->pltBp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td><?=$rows->pltBn?></td>
                        <?php if($rows->pltBn>0 && isset($_SESSION['bld']['pltBn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->pltBn>0 && isset($_SESSION['bld']['pltBn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->pltBn>0){ ?>
                            <td><a href="<?=ROOT?>/Pltbldreqdetails/index4?amnt=<?=$rows->pltBn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><?=$rows->pltABp?></td>
                        <?php if($rows->pltABp>0 && isset($_SESSION['bld']['pltABp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->pltABp>0 && isset($_SESSION['bld']['pltABp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->pltABp>0){ ?>
                            <td><a href="<?=ROOT?>/Pltbldreqdetails/index5?amnt=<?=$rows->pltABp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td><?=$rows->pltABn?></td>
                        <?php if($rows->pltABn>0 && isset($_SESSION['bld']['pltABn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->pltABn>0 && isset($_SESSION['bld']['pltABn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->pltABn>0){ ?>
                            <td><a href="<?=ROOT?>/Pltbldreqdetails/index6?amnt=<?=$rows->pltABn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><?=$rows->pltOp?></td>
                        <?php if($rows->pltOp>0 && isset($_SESSION['bld']['pltOp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->pltOp>0 && isset($_SESSION['bld']['pltOp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->pltOp>0){ ?>
                            <td><a href="<?=ROOT?>/Pltbldreqdetails/index7?amnt=<?=$rows->pltOp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td><?=$rows->pltOn?></td>
                        <?php if($rows->pltOn>0 && isset($_SESSION['bld']['pltOn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->pltOn>0 && isset($_SESSION['bld']['pltOn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->pltOn>0){ ?>
                            <td><a href="<?=ROOT?>/Pltbldreqdetails/index8?amnt=<?=$rows->pltOn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                </table>
            </div>
        </div>
        <div class="boxi">
            <div class="ttl">
                <h2>Plasma</h2>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                    <tr>
                        <td>A+</td>
                        <td><?=$rows->plsmAp?></td>
                        <?php if($rows->plsmAp>0 && isset($_SESSION['bld']['plsmAp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->plsmAp>0 && isset($_SESSION['bld']['plsmAp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->plsmAp>0){ ?>
                            <td><a href="<?=ROOT?>/Plsmbldreqdetails?amnt=<?=$rows->plsmAp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                        
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td><?=$rows->plsmAn?></td>
                        <?php if($rows->plsmAn>0 && isset($_SESSION['bld']['plsmAn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->plsmAn>0 && isset($_SESSION['bld']['plsmAn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->plsmAn>0){ ?>
                            <td><a href="<?=ROOT?>/Plsmbldreqdetails?amnt=<?=$rows->plsmAn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><?=$rows->plsmBp?></td>
                        <?php if($rows->plsmBp>0 && isset($_SESSION['bld']['plsmBp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->plsmBp>0 && isset($_SESSION['bld']['plsmBp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->plsmBp>0){ ?>
                            <td><a href="<?=ROOT?>/Plsmbldreqdetails?amnt=<?=$rows->plsmBp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td><?=$rows->plsmBn?></td>
                        <?php if($rows->plsmBn>0 && isset($_SESSION['bld']['plsmBn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->plsmBn>0 && isset($_SESSION['bld']['plsmBn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->plsmBn>0){ ?>
                            <td><a href="<?=ROOT?>/Plsmbldreqdetails?amnt=<?=$rows->plsmBn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><?=$rows->plsmABp?></td>
                        <?php if($rows->plsmABp>0 && isset($_SESSION['bld']['plsmABp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->plsmABp>0 && isset($_SESSION['bld']['plsmABp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->plsmABp>0){ ?>
                            <td><a href="<?=ROOT?>/Plsmbldreqdetails?amnt=<?=$rows->plsmABp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td><?=$rows->plsmABn?></td>
                        <?php if($rows->plsmABn>0 && isset($_SESSION['bld']['plsmABn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->plsmABn>0 && isset($_SESSION['bld']['plsmABn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->plsmABn>0){ ?>
                            <td><a href="<?=ROOT?>/Plsmbldreqdetails?amnt=<?=$rows->plsmABn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><?=$rows->plsmOp?></td>
                        <?php if($rows->plsmOp>0 && isset($_SESSION['bld']['plsmOp']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->plsmOp>0 && isset($_SESSION['bld']['plsmOp']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->plsmOp>0){ ?>
                            <td><a href="<?=ROOT?>/Plsmbldreqdetails?amnt=<?=$rows->plsmOp?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td><?=$rows->plsmOn?></td>
                        <?php if($rows->plsmOn>0 && isset($_SESSION['bld']['plsmOn']['accept'])){ ?>
                            <td><button>Accepted</button></a></td>
                        <?php }
                         elseif($rows->plsmOn>0 && isset($_SESSION['bld']['plsmOn']['reject'])){ ?>
                            <td><button>rejected</button></a></td>
                        <?php }
                         elseif($rows->plsmOn>0){ ?>
                            <td><a href="<?=ROOT?>/Plsmbldreqdetails?amnt=<?=$rows->plsmOn?>&bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>check</button></a></td>
                        <?php }?>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="boxrow2">
        <?php 
            $count=0;
            $arr=array('rAp','rAn', 'rBp','rBn', 'rABp','rABn', 'rOp','rOn', 'wAp','wAn', 'wBp','wBn', 'wABp','wABn', 'wOp','wOn', 'pltAp','pltAn', 'pltBp','pltBn', 'pltABp','pltABn', 'pltOp','pltOn', 'plsmAp','plsmAn', 'plsmBp','plsmBn', 'plsmABp','plsmABn', 'plsmOp','plsmOn');
            foreach($arr as $k => $v){
                if(isset($_SESSION['bld'][$v]['accept'])){
                    $count++;
                }
            }
            if($count>0){?>
            <a href="<?=ROOT?>/sendaccept/index4?bb=<?=$rows->blood_bank_id_destination?>&id=<?=$id?>"><button>Accept</button></a>

            <?php }
        ?>
        <a href="<?=ROOT?>/sendaccept/index3?id=<?=$id?>"><button>Reject</button></a>
        <a href="<?=ROOT?>/sendaccept/index5"><button>Cancel</button>

    </div>
</div>
