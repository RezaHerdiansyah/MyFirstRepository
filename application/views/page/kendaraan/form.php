<?php
    if (isset($data_detail)) {
        foreach ($data_detail as $row) {
            $id = $row['id'];
            $flat = $row['flat_no'];
            $jenis = $row['jenis_kendaraan'];
            $no_mesin = $row['nomor_mesin'];
        }
        $link_do = 'vehicle/doUpdate/'.$id;
        $btn_value = 'Update';
    }else{
        $flat = '';
        $jenis = '';
        $no_mesin = '';
        $link_do = 'vehicle/doSimpan';
        $btn_value = 'Simpan';
    }
?>
<?php echo form_open($link_do); ?>
    <div class="card rounded-lg">
        <div class="card-header">Form Data Kendaraan</div>
        <div class="card-body">            
            <div class="form-row">
                <div class="col-lg-12 row">
                    <label class="col-md-2">Flat Nomor</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="txtFlatNo" value="<?=$flat;?>" type="text" placeholder="Flat Nomor" />
                        </div>
                    </div>                        
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">Jenis Kendaraan</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="txtJK" value="<?=$jenis;?>" type="text" placeholder="Jenis Kendaraan" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">No Mesin</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="txtNoMesin" value="<?=$no_mesin;?>" type="text" placeholder="Nomor Mesin" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="<?php echo base_url();?>vehicle" class="btn btn-secondary">Batal</a>
            <input class="btn btn-primary" type="submit" value="<?=$btn_value;?>" />
        </div>
    </div>
</form>
