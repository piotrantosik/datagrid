<?php

/*
 * This file is part of the FSi Component package.
 *
 * (c) Norbert Orzechowicz <norbert@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Component\DataGrid;

final class DataGridEvents
{
    const PRE_SET_DATA = 'datagrid.pre_set_data';
    
    const POST_SET_DATA = 'datagrid.post_set_data';
    
    const PRE_BIND_DATA = 'datagrid.pre_bind_data';
    
    const POST_BIND_DATA = 'datagrid.post_bind_data';
}