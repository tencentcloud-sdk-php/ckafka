<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分区和位移
 *
 * @method string getPartition() 获取分区
 * @method void setPartition(string $Partition) 设置分区
 * @method integer getOffset() 获取位点偏移量
 * @method void setOffset(integer $Offset) 设置位点偏移量
 */
class PartitionOffset extends AbstractModel
{
    /**
     * @var string 分区
     */
    public $Partition;

    /**
     * @var integer 位点偏移量
     */
    public $Offset;

    /**
     * @param string $Partition 分区
     * @param integer $Offset 位点偏移量
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
