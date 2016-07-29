<?php
if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site pipelinestutorial, environment dev
$aliases['dev'] = array(
  'root' => '/mnt/gfs/pipelinestutorial.dev/livedev/docroot',
  'ac-site' => 'pipelinestutorial',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'pipelinestutorialbeafppnjb8.devcloud.acquia-sites.com',
  'site' => 'pipelinestutorial',
  'env' => 'dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@pipelinestutorial.dev',
  'root' => '/mnt/gfs/pipelinestutorial.dev/livedev/docroot',
);
if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site pipelinestutorial, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/pipelinestutorial.prod/docroot',
  'ac-site' => 'pipelinestutorial',
  'ac-env' => 'prod',
  'ac-realm' => 'devcloud',
  'uri' => 'pipelinestutorialmernunl8xp.devcloud.acquia-sites.com',
  'site' => 'pipelinestutorial',
  'env' => 'prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@pipelinestutorial.prod',
  'root' => '/mnt/gfs/pipelinestutorial.prod/livedev/docroot',
);
if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site pipelinestutorial, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/pipelinestutorial.test/docroot',
  'ac-site' => 'pipelinestutorial',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'pipelinestutoriald844u9z9ya.devcloud.acquia-sites.com',
  'site' => 'pipelinestutorial',
  'env' => 'test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@pipelinestutorial.test',
  'root' => '/mnt/gfs/pipelinestutorial.test/livedev/docroot',
);
