<?php
    include 'connect.php';
    $id = $_POST['mushroom_id'];
    $name = $_POST['txtname'];
    $localname = $_POST['txtlocalname'];
    $commonname = $_POST['txtcommonname'];
    $sci = $_POST['txtscience'];
    $family = $_POST['txtfamily'];
    $txttype = $_POST['txttype'];
    $benefit = $_POST['txtbenefit'];

    $habitat = $_POST['txthabitat'];
    $growth = $_POST['growth'];
    $radius = $_POST['radius'];
    $height = $_POST['height'];
    $color = $_POST['txtcolor'];
    $description = $_POST['txtdescription'];

    $cap_up = $_POST['cap_up'];
    $cap_side = $_POST['cap_side'];
    $cap_center = $_POST['cap_center'];
    $cap_margin = $_POST['cap_margin'];

    $surfaceup = $_POST['surface_up'];
    $txtsurface_up = $_POST['txtsurface_up'];
    $surface_up = $surfaceup . $txtsurface_up;
    $surface_up_pic = $_POST['surface_up_pic'];

    $surfacemargin = $_POST['surface_margin'];
    $txtsurface_margin = $_POST['txtsurface_margin'];
    $surface_margin = $surfacemargin . $txtsurface_margin;
    $surface_margin_pic = $_POST['surface_margin_pic'];
    
    $undercap = $_POST['undercap'];

    $gills_stipe = $_POST['gills_stipe'];
    $gill = $_POST['gills'];
    $txtgills = $_POST['txtgills'];
    $gills = $gill . $txtgills;
    $gills_pic = $_POST['gills_pic'];
    $gills_color = $_POST['txtgills_color'];
    $gills_freq = $_POST['txtgills_freq'];

    $pore = $_POST['pores'];
    $txtpores = $_POST['txtpores'];
    $pores = $pore . $txtpores;
    $poresshape = $_POST['pores_shape'];
    $txtpores_shape = $_POST['txtpores_shape'];
    $pores_shape = $poresshape . $txtpores_shape;
    $pores_color = $_POST['txtpores_color'];

    $ridge = $_POST['ridges'];
    $txtridges = $_POST['txtridges'];
    $ridges = $ridge . $txtridges;
    $ridges_color = $_POST['txtridges_color'];

    $teeth_width = $_POST['teeth_width'];
    $teeth_length = $_POST['teeth_length'];
    $teeth_color = $_POST['txtteeth_color'];

    $flat_color = $_POST['txtflat_color'];

    $stipe = $_POST['stipe'];
    $stipe_type = $_POST['stipe_type'];
    $stipe_type_pic = $_POST['stipe_type_pic'];
    $stipe_in = $_POST['stipe_in'];
    $stipe_out = $_POST['stipe_out'];
    $stipe_base = $_POST['stipe_base'];
    $surfacestipe = $_POST['surface_stipe'];
    $txtsurface_stipe = $_POST['txtsurface_stipe'];
    $surface_stipe = $surfacestipe . $txtsurface_stipe;
    $surface_stipe_pic = $_POST['surface_stipe_pic'];

    $ring = $_POST['ring'];
    $ring_type = $_POST['ring_type'];

    $volva = $_POST['volva'];
    $volva_color= $_POST['txtvolva_color'];

    $img = (isset($_POST['img']) ? $_POST['img'] : '');
    $upload = $_FILES['img'];
    if($upload != '')
    {
        $path="img/mushroom/";
        $type = strrchr($_FILES['img']['name'],".");
        $newname = $id . $type;
        $path_copy = $path . $newname;
        $path_link = "img/mushroom/" . $newname;
        if (move_uploaded_file($_FILES['img']['tmp_name'],$path_copy)){
        	@unlink(filename)
        }   
    }
UPDATE mushroom SET Mushroom_Id = [value-1], Mushroom_name = [value-2], Mushroom_localname = [value-3], Mushroom_commonname = [value-4], Mushroom_science = [value-5], Mushroom_icon = [value-6], Mushroom_type = [value-7], Mushroom_habitat = [value-8], Mushroom_growth = [value-9], Mushroom_benefit = [value-10], Mushroom_description=[value-11],Cap_up=[value-12],Cap_side=[value-13],Cap_center=[value-14],Cap_margin=[value-15],Surface_up=[value-16],Surface_up_pic=[value-17],Surface_margin=[value-18],Surface_margin_pic=[value-19],Radius=[value-20],Height=[value-21],Cap_color=[value-22],Undercap=[value-23],Gills=[value-24],Gills_pic=[value-25],Gills_stipe=[value-26],Gills_freq=[value-27],Gills_color=[value-28],Pores=[value-29],Pores_shape=[value-30],Pores_color=[value-31],Ridges=[value-32],Ridges_color=[value-33],Teeth_width=[value-34],Teeth_length=[value-35],Teeth_color=[value-36],Flat_color=[value-37],Stipe=[value-38],Stipe_type=[value-39],Stipe_type_pic=[value-40],Stipe_in=[value-41],Stipe_out=[value-42],Stipe_base=[value-43],Stipe_color=[value-44],Stipe_surface=[value-45],Stipe_surface_pic=[value-46],Ring=[value-47],Ring_type=[value-48],Volva=[value-49],Volva_color=[value-50],MushroomFamily_Id=[value-51] WHERE 1