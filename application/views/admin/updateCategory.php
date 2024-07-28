<!DOCTYPE html> 
<html lang="en">
   <title>Admindek | Admin Template</title>
   <?php include_once("topScripts.php")?>       
   </head>
   <body>
      <div class="loader-bg">
         <div class="loader-bar"></div>
      </div>
      <div id="pcoded" class="pcoded">
         <div class="pcoded-overlay-box"></div>
         <div class="pcoded-container navbar-wrapper">
            <?php include_once("nav.php")?>

            <div class="pcoded-main-container">
               <div class="pcoded-wrapper">
                 <?php include_once("side.php")?>
                  <div class="pcoded-content">
                     <div class="page-header card">
                        <div class="row align-items-end">
                           <div class="col-lg-8">
                              <div class="page-header-title">
                                 <i class="feather icon-box bg-c-blue"></i>
                                 <div class="d-inline">
                                    <h5>Categories Here</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                       <a href="#!">Categories</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pcoded-inner-content">
                        <div class="main-body">
                           <div class="page-wrapper">
                              <div class="page-body button-page">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="card">
                                          <div class="card-header">
                                             <div class="card-header-left">
                                                <h5>Enter Category Here</h5>
                                             </div>
                                             
                                          </div>
                                          <div class="card-block">
                                             <div class="content">
                                                <div class="row">
                                                   <div class="col-sm-12 col-md-12">
                                                      <div class="panel panel-bd lobidrag">
                                                         <div class="panel-heading">
                                                         </div>
                                                         <div class="panel-body">

                                                            <form method="post" class="row" action="<?=site_url('CategoryC/addCategory')?>">
                                                               <div class="col-md-6">  
                                                                  <div>
                                                                     <a href="<?=site_url('CategoryC/loadBackCategory')?>">Back</a>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label>Category Name</label>
                                                                     <input type="text" class="form-control" value="<?=$catInfo->CategoryName?>" name="txtCategoryName" placeholder="Add Category Name">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary mt-2" value="Submit">Submit</button>
                                                                  </div>
                                                               </div>
                                                            </form>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="styleSelector"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
      <?php include_once("bottomScripts.php")?>
   </body>
</html>