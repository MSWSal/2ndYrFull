<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>View Sent Requests</title>


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
                        
                        
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td><?=$rows->rAn?></td>
                       
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><?=$rows->rBp?></td>
                        
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td><?=$rows->rBn?></td>
                       
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><?=$rows->rABp?></td>
                       
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td><?=$rows->rABn?></td>
                       
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><?=$rows->rOp?></td>
                        
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td><?=$rows->rOn?></td>
                       
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
                       
                        
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td><?=$rows->wAn?></td>
                      
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><?=$rows->wBp?></td>
                      
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td><?=$rows->wBn?></td>
                       
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><?=$rows->wABp?></td>
                       
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td><?=$rows->wABn?></td>
                      
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><?=$rows->wOp?></td>
                      
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td><?=$rows->wOn?></td>
                       
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
                       
                        
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td><?=$rows->pltAn?></td>
                       
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><?=$rows->pltBp?></td>
                       
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td><?=$rows->pltBn?></td>
                      
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><?=$rows->pltABp?></td>
                      
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td><?=$rows->pltABn?></td>
                      
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><?=$rows->pltOp?></td>
                        
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td><?=$rows->pltOn?></td>
                       
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
                       
                        
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td><?=$rows->plsmAn?></td>
                       
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><?=$rows->plsmBp?></td>
                     
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td><?=$rows->plsmBn?></td>
                       
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><?=$rows->plsmABp?></td>
                       
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td><?=$rows->plsmABn?></td>
                       
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><?=$rows->plsmOp?></td>
                      
                    </tr>
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td><?=$rows->plsmOn?></td>
                       
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
   
</div>
