
<?php 
$response = file_get_contents('https://admin.couaff.com/api/get_salons_web');
$response = json_decode($response);
$i=0;
if ($response->action == 'success') {
     $data = $response->data;
}?>
<style>
    .container {
        display: flex;
        /* flex-wrap: no-wrap; */
        /* overflow-x: auto; */
        margin: 20px;
    }
    .img1 {
        height:180px;width:200px;display: block;border-radius: 10px;
        max-height: 180px;max-width: 200px;
    }
    .salons_div {
        display:flex;flex-direction:row;padding-left:50px;padding-right:40px;overflow: hidden;margin-top: -10px;
    }
    @media (max-width:650px) {
            #img1 {
                height:100;width:550px;border-radius:10px;display: inline-block;
            }
            #salons_div {
                display:flex;flex-direction:row;padding-left:10px;padding-right:10px;overflow: scroll;
            }
        }
</style></head><body><div style="width: 85%;display:flex;align-self:center;margin:auto;flex-direction:column;"> <div style="margin-left:50px;font-weight:600;font-size:large;">Reccommended for you</div><div id = "salons_div" class="salons_div" ><?php foreach($data as $data1 ){$i++;  if($i>5){return;}else{?><a href="donwload_now.html" style="margin-left:12px;" >
<img  src="<?php echo $data1->sal_profile_pic ?>" class="img1" id="img1" ><div style="margin-top:15px;font-weight:500;color:black;font-size:14px"> <?php echo  $data1->sal_name ?> </div><div style="margin-top:0px;font-weight:400;color:black;font-size:12px"> <?php echo  $data1->sal_address ?> </div></a>
        <?php }}?>
        </div>
        </div>
</body>