<?php
/**
 * Componente Reutilizable de Preguntas Frecuentes (FAQ)
 * Genera el DOM accesible y mantiene coherencia 100% con el esquema FAQPage JSON-LD
 */

// Si la página no definió su conjunto específico de FAQs, usamos el catálogo maestro de alta conversión:
if (!isset($faq_list) || empty($faq_list)) {
    $faq_list = [
        [
            'question' => '¿Por qué es obligatorio contratar a un instalador certificado por la SEC y no a un gásfiter aficionado?',
            'answer' => 'El gas es un elemento de alto riesgo. En Chile, el Decreto Supremo N° 66 del Ministerio de Economía exige que toda instalación, reparación o modificación de redes de gas sea efectuada exclusivamente por un instalador autorizado por la SEC (Superintendencia de Electricidad y Combustibles). Contratar a un técnico sin certificación anula las pólizas de seguro de hogar, arriesga cortes de suministro por parte de Metrogas, Lipigas, Abastible o Gasco, expone a su familia a intoxicación por monóxido de carbono o explosiones, e impide la obtención del Sello Verde obligatorio.'
        ],
        [
            'question' => '¿Cómo detectan una fuga de gas si es invisible y cómo la reparan sin romper pisos ni paredes?',
            'answer' => 'En Instalgas Chile utilizamos tecnología no invasiva de última generación: inyectamos gas trazador inocuo (mezcla no inflamable de nitrógeno e hidrógeno) y rastreamos con sensores de ultrasonido y geófonos electroacústicos, localizando el punto exacto con precisión milimétrica. Para reparar sin picar baldosas, porcelanatos ni muros, aplicamos el polímero alemán <strong>Prodoral R6-1</strong>, el cual sella herméticamente todas las microfisuras y uniones interiores de la cañería desde adentro, con certificación europea y garantía total.'
        ],
        [
            'question' => '¿Qué es el polímero Prodoral R6-1 y qué garantía ofrece en redes de gas?',
            'answer' => 'Prodoral R6-1 es una solución química líquida de tecnología alemana diseñada específicamente para sellar cañerías de gas en edificaciones sin necesidad de demolición. Se introduce a presión controlada en el circuito de gas, penetrando en las roscas y microporosidades, solidificando en una película elástica permanente resistente a la presión. Ofrecemos garantía técnica por escrito y prueba de hermeticidad con manómetro calibrado ante la presencia del cliente.'
        ],
        [
            'question' => '¿Qué trámite o reparación se realiza para pasar de Sello Rojo o Amarillo a Sello Verde SEC?',
            'answer' => 'Cuando una entidad inspectora otorga Sello Rojo (peligro inminente) o Sello Amarillo (observaciones con plazo), entregamos el informe técnico detallado. Nuestro instalador SEC Clase 3, Domingo Isaín, subsana cada no conformidad aplicando el marco normativo correspondiente según el año de su propiedad (Decreto 222 para construcciones anteriores a 2007, o Decreto 66 con modificaciones del Decreto 20 para inmuebles desde 2007 a la fecha), emite el formulario de regularización técnica y coordina la reinspección para otorgar el Sello Verde oficial ante la SEC.'
        ],
        [
            'question' => '¿Cuánto tardan en atender una emergencia de fuga o corte de suministro de gas?',
            'answer' => 'Contamos con cuadrillas de urgencia 24/7 operativas en toda la Región Metropolitana (Las Condes, Vitacura, Providencia, Ñuñoa, Santiago Centro, Lo Barnechea, La Reina, entre otras) y en la V Región (Viña del Mar, Valparaíso). El tiempo promedio de respuesta para situaciones críticas es de 45 a 90 minutos según la ubicación.'
        ],
        [
            'question' => '¿Realizan conversión de artefactos y empalmes de Gas Licuado (balón/estanque) a Gas Natural (Metrogas)?',
            'answer' => 'Sí, realizamos el proyecto completo de conversión: cambio de inyectores en cocinas, encimeras, hornos, calefont y calderas, calibración de presiones de quemado, cálculo de diámetros de cañería en cobre y certificación técnica para empalmes a la red de gas natural.'
        ],
        [
            'question' => '¿Qué respaldo y documentos legales entregan al concluir el trabajo?',
            'answer' => 'Entregamos comprobante de atención con número de registro SEC del instalador Domingo Isaín Plaza Caamaño (RUT: 12.738.961-6), protocolo de prueba de hermeticidad, boleta o factura electrónica, y certificado de garantía del servicio prestado.'
        ]
    ];
}
?>

<section class="section" id="faq-section" aria-labelledby="faq-main-heading">
  <div class="container">
    <div class="section-header">
      <span class="section-badge">Respuestas Claras Para Clientes Exigentes</span>
      <h2 id="faq-main-heading">Preguntas Frecuentes sobre Seguridad y Normativa SEC</h2>
      <p>
        Si llegó a nosotros buscando en Google una solución urgente o definitiva, aquí resolvemos las principales dudas sobre procedimientos, tecnología no invasiva y garantías legales en Chile.
      </p>
    </div>

    <div class="faq-grid" role="region" aria-label="Acordeón de preguntas frecuentes">
      <?php foreach ($faq_list as $index => $faq): ?>
        <div class="faq-item <?= ($index === 0) ? 'is-open' : '' ?>">
          <button class="faq-question" id="faq-q-<?= $index ?>" aria-expanded="<?= ($index === 0) ? 'true' : 'false' ?>" aria-controls="faq-a-<?= $index ?>">
            <span><?= htmlspecialchars($faq['question']) ?></span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="faq-answer" id="faq-a-<?= $index ?>" role="region" aria-labelledby="faq-q-<?= $index ?>">
            <p><?= $faq['answer'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 2.5rem;">
      <p style="font-weight: 600; color: var(--primary-blue);">¿Tiene un caso específico o una duda no resuelta aquí?</p>
      <a href="<?= get_whatsapp_url('Hola Domingo Isaín, tengo una pregunta sobre un servicio de gas en mi propiedad.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" aria-label="Consultar directamente con el instalador SEC por WhatsApp">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
        <span>Hablar con Domingo Isaín (SEC) en WhatsApp</span>
      </a>
    </div>
  </div>
</section>
