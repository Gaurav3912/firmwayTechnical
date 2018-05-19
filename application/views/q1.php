<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row justify-content-center">
    <div class="col-6">
        <h3>Metal Price per sqcm with 100%</h3>
        <ul class="list-group">
            <?php foreach ($metals as $metal) { ?>
            <li class="list-group-item"><span><?php echo $metal['metal_name'] ?></span><span class="priceSpan"><?php echo $metal['metal_cost'] ?></span></li>
            <?php } ?>

        </ul>
        <h3>Coating Price per sqcm for 1mm thick</h3>
        <ul class="list-group">
            <?php foreach ($coatings as $coating) { ?>
                <li class="list-group-item"><span><?php echo $coating['coating_name'] ?></span><span class="priceSpan"><?php echo $coating['coating_price'] ?></span></li>
            <?php } ?>

        </ul>
    </div>
    <div class="col-6">
        <form id="q1Form">
            <div class="form-segment">
                <div class="form-group">
                    <label for="trophyShape">Trophy Shape</label>
                    <select class="form-control" name="trophyShape" id="trophyShape">
                        <option value="">Select Shape</option>
                        <option value="Sphere">Sphere</option>
                        <option value="Cylinder">Cylinder</option>
                        <option value="Cube">Cube</option>
                    </select>
                </div>
                <!--<div class="form-group">-->
                <div class="dimensions" id="Sphere">
                    <div class="form-group">
                        <label for="sphereRadius">Radius of Sphere (cm)</label>
                        <input type="text" class="form-control" name="sphereRadius" id="sphereRadius" placeholder="Radius of Sphere">
                    </div>
                </div>
                <div class="dimensions" id="Cylinder">
                    <div class="form-group">
                        <label for="cylinderRadius">Radius of Cylinder (cm)</label>
                        <input type="text" class="form-control" name="cylinderRadius" id="cylinderRadius" placeholder="Radius of Cylinder">
                    </div>
                    <div class="form-group">
                        <label for="cylinderHeight">Height of Cylinder (cm)</label>
                        <input type="text" class="form-control" name="cylinderHeight" id="cylinderHeight" placeholder="Height of Cylinder">
                    </div>
                </div>
                <div class="dimensions" id="Cube">
                    <div class="form-group">
                        <label for="cubeLength">Length</label>
                        <input type="text" class="form-control" name="cubeLength" id="cubeLength" placeholder="Length">
                    </div>

                </div>
                <!--</div>-->
            </div>
            <div class="form-segment">
                <div class="form-group">
                    <label for="metal">Select Metal</label>
                    <select class="form-control" name="metalType" id="metal">
                        <?php foreach ($metals as $metal) { ?>
                            <option value="<?php echo $metal['id'] ?>"><?php echo $metal['metal_name'] ?></option>
                        <?php } ?>


                    </select>
                </div>
                <div>
                    <div class="form-group">
                        <label for="metalPurity">Metal Purity %</label>
                        <input type="text" class="form-control" name="metalPurity" id="metalPurity" placeholder="Metal Purity %">
                    </div>
                </div>
            </div>
            <div class="form-segment">
                <div class="form-group">
                    <label for="coating">Coating Type</label>
                    <select class="form-control" name="coating" id="coating">
                        <?php foreach ($coatings as $coating) { ?>
                            <option value="<?php echo $coating['id'] ?>"><?php echo $coating['coating_name'] ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div>
                    <div class="form-group">
                        <label for="coatingThickness">Coating Thickness (mm)</label>
                        <input type="text" class="form-control" name="coatingThickness" id="coatingThickness" placeholder="Coating Thickness (mm)">
                    </div>
                </div>
            </div>
        </form>
        <div>
            <div class="form-group">
                <button type="button" class="btn btn-primary mb-2 " id="formSubmitBtn">Get Cost</button>
            </div>
        </div>
        <div>
            <div class="form-group">
                <label for="totalCost">Total Cost</label>
                <input type="text" disabled class="form-control" name="totalCost" id="totalCost" placeholder="" value="0">
            </div>
        </div>
    </div>

</div>
