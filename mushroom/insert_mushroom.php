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
    if($upload <> '')
    {
        $path="img/mushroom/";
        $type = strrchr($_FILES['img']['name'],".");
        $newname = $id . $type;
        $path_copy = $path . $newname;
        $path_link = "img/mushroom/" . $newname;
        move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);      
    }
    if ($undercap == 'ครีบ') {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom (Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Gills, Gills_pic, Gills_stipe, Gills_color, Gills_freq, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$gills', '$gills_pic', '$gills_stipe', '$gills_color', '$gills_freq', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom (Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Gills, Gills_pic, Gills_stipe, Gills_color, Gills_freq, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$gills', '$gills_pic', '$gills_stipe', '$gills_color', '$gills_freq', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Gills, Gills_pic, Gills_stipe, Gills_color, Gills_freq, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$gills', '$gills_pic', '$gills_stipe', '$gills_color', '$gills_freq', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Gills, Gills_pic, Gills_stipe, Gills_color, Gills_freq, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$gills', '$gills_pic', '$gills_stipe', '$gills_color', '$gills_freq', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$family')";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Gills, Gills_pic, Gills_stipe, Gills_color, Gills_freq, Stipe, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$gills', '$gills_pic', '$gills_stipe', '$gills_color', '$gills_freq', '$stipe', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Gills, Gills_pic, Gills_stipe, Gills_color, Gills_freq, Stipe, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$gills', '$gills_pic', '$gills_stipe', '$gills_color', '$gills_freq', '$stipe', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Gills, Gills_pic, Gills_stipe, Gills_color, Gills_freq, Stipe, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$gills', '$gills_pic', '$gills_stipe', '$gills_color', '$gills_freq', '$stipe', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Gills, Gills_pic, Gills_stipe, Gills_color, Gills_freq, Stipe, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$gills', '$gills_pic', '$gills_stipe', '$gills_color', '$gills_freq', '$stipe', '$ring', '$volva', '$family')";
                }
            }
        }
    }
    elseif ($undercap == 'รู') {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Pores, Pores_shape, Pores_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$pores', '$pores_shape', '$pores_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Pores, Pores_shape, Pores_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$pores', '$pores_shape', '$pores_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Pores, Pores_shape, Pores_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$pores', '$pores_shape', '$pores_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$family')";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Pores, Pores_shape, Pores_color, Stipe, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$pores', '$pores_shape', '$pores_color', '$stipe', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Pores, Pores_shape, Pores_color, Stipe, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$pores', '$pores_shape', '$pores_color', '$stipe', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Pores, Pores_shape, Pores_color, Stipe, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$pores', '$pores_shape', '$pores_color', '$stipe', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Pores, Pores_shape, Pores_color, Stipe, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$pores', '$pores_shape', '$pores_color', '$stipe', '$ring', '$volva', '$family')";
                }
            }
        }
    }
    elseif ($undercap == 'สันนูน') {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Ridges, Ridges_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$ridges', '$ridges_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Ridges, Ridges_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$ridges', '$rideges_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Ridges, Ridges_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$ridges', '$rideges_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Ridges, Ridges_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$ridges', '$rideges_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$family')";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Ridges, Ridges_color, Stipe, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$ridges', '$rideges_color', '$stipe', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Ridges, Ridges_color, Stipe, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$ridges', '$rideges_color', '$stipe', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Ridges, Ridges_color, Stipe, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$ridges', '$rideges_color', '$stipe', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Ridges, Ridges_color, Stipe, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$ridges', '$rideges_color', '$stipe', '$ring', '$volva', '$family')";
                }
            }
        }
    }
    elseif ($undercap == 'ฟัน') {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Teeth_width, Teeth_length, Teeth_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$teeth_width', '$teeth_length', '$teeth_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Teeth_width, Teeth_length, Teeth_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$teeth_width', '$teeth_length', '$teeth_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Teeth_width, Teeth_length, Teeth_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$teeth_width', '$teeth_length', '$teeth_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Teeth_width, Teeth_length, Teeth_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$teeth_width', '$teeth_length', '$teeth_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$family')";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Teeth_width, Teeth_length, Teeth_color, Stipe, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$teeth_width', '$teeth_length', '$teeth_color', '$stipe', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Teeth_width, Teeth_length, Teeth_color, Stipe, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$teeth_width', '$teeth_length', '$teeth_color', '$stipe', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Teeth_width, Teeth_length, Teeth_color, Stipe, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$teeth_width', '$teeth_length', '$teeth_color', '$stipe', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Teeth_width, Teeth_length, Teeth_color, Stipe, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$teeth_width', '$teeth_length', '$teeth_color', '$stipe', '$ring', '$volva', '$family')";
                }
            }
        }
    }
    else {
        if ($stipe == 'มี') {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Flat_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$flat_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Flat_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$flat_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Flat_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$flat_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Flat_color, Stipe, Stipe_type, Stipe_type_pic, Stipe_in, Stipe_out, Stipe_base, Stipe_surface, Stipe_surface_pic, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$flat_color', '$stipe', '$stipe_type', '$stipe_type_pic', '$stipe_in', '$stipe_out', '$stipe_base', '$surface_stipe', '$surface_stipe_pic', '$ring', '$volva', '$family')";
                }
            }
        } else {
            if ($ring == 'มี') {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Flat_color, Stipe, Ring, Ring_type, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$flat_color', '$stipe', '$ring', '$ring_type', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Flat_color, Stipe, Ring, Ring_type, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$flat_color', '$stipe', '$ring', '$ring_type', '$volva', '$family')";
                }
            } else {
                if ($volva == 'มี') {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Flat_color, Stipe, Ring, Volva, Volva_color, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$flat_color', '$stipe', '$ring', '$volva', '$volva_color', '$family')";
                } else {
                    $sql = "INSERT INTO mushroom(Mushroom_Id, Mushroom_name, Mushroom_localname, Mushroom_commonname, Mushroom_science, Mushroom_icon, Mushroom_type, Mushroom_habitat, Mushroom_growth, Mushroom_benefit, Mushroom_description, Radius, Height, Cap_color, Cap_up, Cap_side, Cap_center, Cap_margin, Surface_up, Surface_up_pic, Surface_margin, Surface_margin_pic, Undercap, Flat_color, Stipe, Ring, Volva, MushroomFamily_Id) VALUES ('$id', '$name', '$localname', '$commonname', '$sci', '$newname', '$txttype', '$habitat', '$growth', '$benefit', '$description', '$radius', '$height', '$color', '$cap_up', '$cap_side', '$cap_center', '$cap_margin', '$surface_up', '$surface_up_pic', '$surface_margin', '$surface_margin_pic', '$undercap', '$flat_color', '$stipe', '$ring', '$volva', '$family')";
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