
<form method="POST" class="horaExtra">
	<div class="ladoEsquerdo">
		<h4>Manhã</h4>
		<label>Entrada: </label>
		<p>
			<input type="time" name="horaEntradaManha" value="08:00" required="true" />
		</p>

		<label>Saída</label>
		<p>
			<input type="time" name="horaSaidaManha" value="12:00" required="true" />
		</p>
	</div>
	<div class="ladoDireito">
		<h4>Tarde</h4>
		<label>Entrada: </label>
		<p>
			<input type="time" name="horaEntradaTarde" value="14:00" required="true" />
		</p>

		<label>Saída</label>
		<p>
			<input type="time" name="horaSaidaTarde" value="18:00" required="true" />
		</p>
	</div>

	<p>
		<input type="date" name="data" id="data" placeholder="Informe a data" required="true">
	</p>

	<div style="clear: both;"></div>
	
	<p>	
		<button>Calcular Hora-Extra</button>
	</p>
</form>