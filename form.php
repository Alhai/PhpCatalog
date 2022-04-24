<div class="col-md-12 col-lg-12 col-xl-12">
    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="card-title">Choix</h5>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="cart-container">
                        <form method="post" action="submit_form.php">
                            <div class="cart-head">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col">Produit</th>
                                                <th scope="col">Quantité</th>
                                                <th scope="col">Prix</th>
                                                <th scope="col" class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                <td>Air Pods Max</td>
                                                <td>
                                                    <div class="form-group mb-0"><input type="number" class="form-control cart-qty" name="qtyCasq0" id="qtyCasq0" min="0" value="0"></div>
                                                </td>
                                                <td>
                                                <div id="price0">90,00 €</div>
                                                </td>
                                                <td><div class="text-right" id="priceCasqTotal0">0,00 €</div></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                <td>Mont Blanc MB 01</td>
                                                <td>
                                                    <div class="form-group mb-0"><input type="number" class="form-control cart-qty" name="qtyCasq1" id="qtyCasq1"  min="0" value="0"></div>
                                                </td>
                                                <td id="price1">90,00 €</td>
                                                <td class="text-right" id="priceCasqTotal1">0,00 €</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                <td>BeyerDynamic</td>
                                                <td>
                                                    <div class="form-group mb-0"><input type="number" class="form-control cart-qty" name="qtyCasq2" id="qtyCasq2" min="0" value="0"></div>
                                                </td>
                                                <td id="price2">70,00 €</td>
                                                <td class="text-right" id="priceCasqTotal2">0,00 €</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="cart-footer text-right">
                                <button type="submit" name="submit" class="btn btn-secondary my-1 bg-secondary bg-gradient" style="color: white;  border-color: #000;">
                                    Commander <i class="fas fa-angle-right fa-fw" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>