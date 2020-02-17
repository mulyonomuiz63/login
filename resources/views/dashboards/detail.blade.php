<?php if(Auth::user()->userlv == 2){ ?>
<div class="right_col" role="main">
	<div style="padding-top: 50px;" class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Detail Admin dan User</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <table class="table">
                            <thead>
                              <tr>
                                <th>NO</th>
                                <th>Username</th>
                                <th>User Level</th>
                                <th>tglupd</th>
                                <th>usrupd</th>
                                <th>kode</th>
                                <th>host</th>
                              </tr>
                            </thead>
                            <tbody>
                               <?php $no=0;
                              foreach($b as $a){
                              $no++; ?>
                              <tr>
                                <th scope="row">{{$no}}</th>
                                <td>{{$a->usernm}}</td>
                                <td>{{$a->userlv}}</td>
                                <td>{{$a->tglupd}}</td>
                                <td>{{$a->usrupd}}</td>
                                <td>{{$a->kode}}</td>
                                <td>{{$a->host}}</td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>

                        </div>
                      </div>					
</div>	
<?php }else{ ?> 
<div class="right_col" role="main">
  <div style="padding-top: 50px;" class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Selamat Datang Di Web Percobaan Ini</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          

                        </div>
                      </div>          
</div>  
<?php } ?>