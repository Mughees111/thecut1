
<?php 
$response = file_get_contents('https://admin.couaff.com/api/get_salons_web');
$response = json_decode($response);
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
        height:200px;width:200px;display: block;border-radius: 10px;
        max-height: 200px;max-width: 200px;
    }
    .salons_div {
        display:flex;flex-direction:row;padding-left:40px;padding-right:40px;overflow: scroll;margin-top: -50px;
    }
    @media (max-width:650px) {
            #img1 {
                height:100;width:550px;border-radius:10px;display: inline-block;
            }
            #salons_div {
                display:flex;flex-direction:row;padding-left:10px;padding-right:10px;overflow: scroll;
            }
        }
</style>
</head>
<body style="padding-left:50px;"><div style="margin-left:50px;font-weight:600;font-size:large;">Reccommended for you</div>
        <div id = "salons_div" class="salons_div" ><?php  foreach($data as $data1 ){?><a href="donwload_now.html" style="margin-left:12px;" >
                    <img  src="<?php echo $data1->sal_profile_pic ?>" class="img1" id="img1" ><div style="margin-top:15px;font-weight:600;color:black"> <?php echo  $data1->sal_name ?> </div><div style="margin-top:0px;font-weight:500;color:black"> <?php echo  $data1->sal_address ?> </div>
                </a>
                <?php }?>
        </div>
</body>