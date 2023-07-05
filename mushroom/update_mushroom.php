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

    $img2 = $_POST['img'];
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
        	@unlink($path.$img2);
        }   
    } else {
        $newname = $img2;
    }
    if ($undercap == 'ครีบ') {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Gills = '$gills', Gills_pic = '$gills_pic', Gills_stipe = '$gills_stipe', Gills_freq = '$gills_freq', Gills_color = '$gills_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Gills = '$gills', Gills_pic = '$gills_pic', Gills_stipe = '$gills_stipe', Gills_freq = '$gills_freq', Gills_color = '$gills_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Gills = '$gills', Gills_pic = '$gills_pic', Gills_stipe = '$gills_stipe', Gills_freq = '$gills_freq', Gills_color = '$gills_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Gills = '$gills', Gills_pic = '$gills_pic', Gills_stipe = '$gills_stipe', Gills_freq = '$gills_freq', Gills_color = '$gills_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Gills = '$gills', Gills_pic = '$gills_pic', Gills_stipe = '$gills_stipe', Gills_freq = '$gills_freq', Gills_color = '$gills_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Gills = '$gills', Gills_pic = '$gills_pic', Gills_stipe = '$gills_stipe', Gills_freq = '$gills_freq', Gills_color = '$gills_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Gills = '$gills', Gills_pic = '$gills_pic', Gills_stipe = '$gills_stipe', Gills_freq = '$gills_freq', Gills_color = '$gills_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Gills = '$gills', Gills_pic = '$gills_pic', Gills_stipe = '$gills_stipe', Gills_freq = '$gills_freq', Gills_color = '$gills_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        }
    }
    elseif ($undercap == 'รู') {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                   $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        }
    }
    elseif ($undercap == 'สันนูน') {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Ridges = '$ridges', Ridges_color = '$ridges_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Ridges = '$ridges', Ridges_color = '$ridges_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap, Pores = '$pores', Pores_shape = '$pores_shape', Pores_color = '$pores_color', Ridges = '$ridges', Ridges_color = '$ridges_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Ridges = '$ridges', Ridges_color = '$ridges_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Ridges = '$ridges', Ridges_color = '$ridges_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Ridges = '$ridges', Ridges_color = '$ridges_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Ridges = '$ridges', Ridges_color = '$ridges_color', Stipe = '$stipe', Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Ridges = '$ridges', Ridges_color = '$ridges_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        }
    }
    elseif ($undercap == 'ฟัน') {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Teeth_width = '$teeth_width', Teeth_length = '$teeth_length', Teeth_color = '$teeth_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Teeth_width = '$teeth_width', Teeth_length = '$teeth_length', Teeth_color = '$teeth_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Teeth_width = '$teeth_width', Teeth_length = '$teeth_length', Teeth_color = '$teeth_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Teeth_width = '$teeth_width', Teeth_length = '$teeth_length', Teeth_color = '$teeth_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Teeth_width = '$teeth_width', Teeth_length = '$teeth_length', Teeth_color = '$teeth_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Teeth_width = '$teeth_width', Teeth_length = '$teeth_length', Teeth_color = '$teeth_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Teeth_width = '$teeth_width', Teeth_length = '$teeth_length', Teeth_color = '$teeth_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Teeth_width = '$teeth_width', Teeth_length = '$teeth_length', Teeth_color = '$teeth_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        }
    }
    else {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Flat_color = '$flat_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Flat_color = '$flat_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Flat_color = '$flat_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Flat_color = '$flat_color', Stipe = '$stipe', Stipe_type = '$stipe_type', Stipe_type_pic = '$stipe_type_pic', Stipe_in = '$stipe_in', Stipe_out = '$stipe_out', Stipe_base = '$stipe_base', Stipe_color = , Stipe_surface = '$surface_stipe', Stipe_surface_pic = '$surface_stipe_pic', Ring = '$ring', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Flat_color = '$flat_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Flat_color = '$flat_color', Stipe = '$stipe', Ring = '$ring', Ring_type = '$ring_type', Volva = '$volva', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Flat_color = '$flat_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva', Volva_color = '$volva_color', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                } else {
                    $sql = "UPDATE mushroom SET Mushroom_name = '$name', Mushroom_localname = '$localname', Mushroom_commonname = '$commonname', Mushroom_science = '$sci', Mushroom_icon = '$newname', Mushroom_type = '$txttype', Mushroom_habitat = '$habitat', Mushroom_growth = '$growth', Mushroom_benefit = '$benefit', Mushroom_description = '$description', Cap_up = '$cap_up', Cap_side = '$cap_side', Cap_center = '$cap_center', Cap_margin = '$cap_margin', Surface_up = '$surface_up', Surface_up_pic = '$surface_up_pic', Surface_margin = '$surface_margin', Surface_margin_pic = '$surface_margin_pic', Radius = '$radius', Height = '$height', Cap_color = '$color', Undercap = '$undercap', Flat_color = '$flat_color', Stipe = '$stipe', Ring = '$ring', Volva = '$volva'', MushroomFamily_Id = '$family' WHERE Mushroom_Id = '$id'";
                }
            }
        }
    }
    if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('บันทึกข้อมูลสำเร็จ');
            window.location.href='dashboard.php';
            </script>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>