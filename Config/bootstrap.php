<?php

Croogo::hookBehavior('Node', 'CustomFields.CustomFieldHolder');
Croogo::hookAdminTab('Nodes/admin_add', __d('custom_fields', 'Custom fields'), 'CustomFields.tab_custom_fields');
Croogo::hookAdminTab('Nodes/admin_edit', __d('custom_fields', 'Custom fields'), 'CustomFields.tab_custom_fields');
