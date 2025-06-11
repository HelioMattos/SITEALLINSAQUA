
			<div class="pacotes-cards">
				<?php foreach ($pontos as $ponto): ?>
			  <div class="card">
				<a href="voo.php" <?php if (!empty($ponto->imagem)): ?>>
					
				<div class="card-tag card-tag-top">
				  <p>360°</p>
				</div>
				<div class="card-tag card-tag-bottom">
				  <p><?= htmlspecialchars($ponto->titulo) ?></p>
				</div>
				<img src="data:<?= $ponto->imagem_tipo ?>;base64,<?= base64_encode($ponto->imagem) ?>"
						alt="<?= htmlspecialchars($ponto->titulo) ?>" class="card-img">
				<p><div class="card-content">
					<?= htmlspecialchars($ponto->descricao) ?>
				</p>
				<?php endif; ?>				  
				</div>
			    </a>
				<?php endforeach; ?>
			  </div>
