<?php
/**
 * This file is part of the MediaWiki extension ChameleonComponents.
 *
 * ChameleonComponents is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * ChameleonComponents is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with ChameleonComponents.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @file
 * @ingroup extensions
 * @author thomas-topway-it <support@topway.it>
 * @copyright Copyright ©2024, https://wikisphere.org
 */

return [
	'scss' => [
		'styles/f_variables.scss',
		'styles/f_bootswatch.scss',
		'styles/navbar.scss',
	],
	'layout' => 'layout/layout.xml',
	'module' => [
		'scripts' => [
			'scripts/script.js'
		],
		'styles' => [
		],
		'dependencies' => [
			'mediawiki.cookie',
			'oojs-ui-core',
			'oojs-ui.styles.icons-layout',
			'oojs-ui-widgets'
		]
	]
];
