<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Breadcrumbs Pill Navigation -->
<nav class="dyn-bc-nav" aria-label="breadcrumb">
    <a href="<?= site_url() ?>" class="dyn-bc-home">
        <i class="bi bi-house-door-fill me-1"></i>Home
    </a>
    <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
        <?php 
        $total_crumbs = count($breadcrumbs);
        $idx = 0;
        foreach ($breadcrumbs as $crumb): 
            $idx++;
            $is_last = ($idx === $total_crumbs);
            $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
            $url = isset($crumb['url']) ? $crumb['url'] : '';
        ?>
            <span class="dyn-bc-sep">›</span>
            <?php if (!$is_last && !empty($url) && $url !== 'javascript:void(0)'): ?>
                <a href="<?= $url ?>" class="dyn-bc-link"><?= htmlspecialchars($name) ?></a>
            <?php else: ?>
                <span class="dyn-bc-current"><?= htmlspecialchars($name) ?></span>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php elseif (isset($bc_current) && !empty($bc_current)): ?>
        <span class="dyn-bc-sep">›</span>
        <span class="dyn-bc-current"><?= htmlspecialchars($bc_current) ?></span>
    <?php endif; ?>
</nav>