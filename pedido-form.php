<div id="div-row-operation-sample" style="display:none">
	<div class="row" id="div-row-x">
		<div class="col-4" id="select">
			<label for="pro_codigo_x" class="form-label">Produto</label>
            <input type="text" class="form-control" value="" name="pro_codigo[]" id="pro_codigo_x" placeholder="0" onchange="sel_desc();">
			<input type="text" class="form-control" value="" name="pro_desc[]" id="pro_desc_x">
            <input type="text" class="form-control" value="" name="pro_prc[]" id="pro_prc_x">
		</div>
		<div class="col-4">
			<label for="pro_qtd_x" class="form-label">Quantidade</label>
			<input type="number" class="form-control" value="" name="pro_qtd[]" id="pro_qtd_x" placeholder="0">
		</div>
		<div class="col-4">
			<div style="padding-top: 30px">
				<i title="Adicionar Item" class="fas fa-circle-plus text-success i-add-operation" id="i_add_item_x" style="cursor: pointer" onclick="add_item()"></i>
				<script>
					function shortcut() {
					    var element = document.querySelector('[title="Adicionar Item"]');
						event.preventDefault();
					    element.click();
					}
				</script>
			</div>
		</div>
	</div>
</div>

<div id="div-content-multiple-operation">
</div>

