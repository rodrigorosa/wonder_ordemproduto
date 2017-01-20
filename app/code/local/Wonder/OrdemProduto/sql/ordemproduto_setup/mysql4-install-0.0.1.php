<?php
$installer = $this;
$installer->startSetup();

$productEntityTypeId = $installer->getEntityTypeId('catalog_product');
$installer->updateAttribute($productEntityTypeId, 'updated_at', 'frontend_label', 'Recente');
$installer->updateAttribute($productEntityTypeId, 'updated_at', 'used_for_sort_by', 1);

$installer->endSetup();
