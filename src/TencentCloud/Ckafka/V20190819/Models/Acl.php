<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ACL对象实体
 *
 * @method integer getResourceType() 获取Acl资源类型，（0:UNKNOWN，1:ANY，2:TOPIC，3:GROUP，4:CLUSTER，5:TRANSACTIONAL_ID）当前只有TOPIC，
 * @method void setResourceType(integer $ResourceType) 设置Acl资源类型，（0:UNKNOWN，1:ANY，2:TOPIC，3:GROUP，4:CLUSTER，5:TRANSACTIONAL_ID）当前只有TOPIC，
 * @method string getResourceName() 获取资源名称，和resourceType相关如当resourceType为TOPIC时，则该字段表示topic名称，当resourceType为GROUP时，该字段表示group名称
 * @method void setResourceName(string $ResourceName) 设置资源名称，和resourceType相关如当resourceType为TOPIC时，则该字段表示topic名称，当resourceType为GROUP时，该字段表示group名称
 * @method string getPrincipal() 获取用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户
 * @method void setPrincipal(string $Principal) 设置用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户
 * @method string getHost() 获取默认\*,表示任何host都可以访问，当前ckafka不支持host为\*，但是后面开源kafka的产品化会直接支持
 * @method void setHost(string $Host) 设置默认\*,表示任何host都可以访问，当前ckafka不支持host为\*，但是后面开源kafka的产品化会直接支持
 * @method integer getOperation() 获取Acl操作方式(0:UNKNOWN，1:ANY，2:ALL，3:READ，4:WRITE，5:CREATE，6:DELETE，7:ALTER，8:DESCRIBE，9:CLUSTER_ACTION，10:DESCRIBE_CONFIGS，11:ALTER_CONFIGS，12:IDEMPOTEN_WRITE)
 * @method void setOperation(integer $Operation) 设置Acl操作方式(0:UNKNOWN，1:ANY，2:ALL，3:READ，4:WRITE，5:CREATE，6:DELETE，7:ALTER，8:DESCRIBE，9:CLUSTER_ACTION，10:DESCRIBE_CONFIGS，11:ALTER_CONFIGS，12:IDEMPOTEN_WRITE)
 * @method integer getPermissionType() 获取权限类型(0:UNKNOWN，1:ANY，2:DENY，3:ALLOW)
 * @method void setPermissionType(integer $PermissionType) 设置权限类型(0:UNKNOWN，1:ANY，2:DENY，3:ALLOW)
 */
class Acl extends AbstractModel
{
    /**
     * @var integer Acl资源类型，（0:UNKNOWN，1:ANY，2:TOPIC，3:GROUP，4:CLUSTER，5:TRANSACTIONAL_ID）当前只有TOPIC，
     */
    public $ResourceType;

    /**
     * @var string 资源名称，和resourceType相关如当resourceType为TOPIC时，则该字段表示topic名称，当resourceType为GROUP时，该字段表示group名称
     */
    public $ResourceName;

    /**
     * @var string 用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户
     */
    public $Principal;

    /**
     * @var string 默认\*,表示任何host都可以访问，当前ckafka不支持host为\*，但是后面开源kafka的产品化会直接支持
     */
    public $Host;

    /**
     * @var integer Acl操作方式(0:UNKNOWN，1:ANY，2:ALL，3:READ，4:WRITE，5:CREATE，6:DELETE，7:ALTER，8:DESCRIBE，9:CLUSTER_ACTION，10:DESCRIBE_CONFIGS，11:ALTER_CONFIGS，12:IDEMPOTEN_WRITE)
     */
    public $Operation;

    /**
     * @var integer 权限类型(0:UNKNOWN，1:ANY，2:DENY，3:ALLOW)
     */
    public $PermissionType;

    /**
     * @param integer $ResourceType Acl资源类型，（0:UNKNOWN，1:ANY，2:TOPIC，3:GROUP，4:CLUSTER，5:TRANSACTIONAL_ID）当前只有TOPIC，
     * @param string $ResourceName 资源名称，和resourceType相关如当resourceType为TOPIC时，则该字段表示topic名称，当resourceType为GROUP时，该字段表示group名称
     * @param string $Principal 用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户
     * @param string $Host 默认\*,表示任何host都可以访问，当前ckafka不支持host为\*，但是后面开源kafka的产品化会直接支持
     * @param integer $Operation Acl操作方式(0:UNKNOWN，1:ANY，2:ALL，3:READ，4:WRITE，5:CREATE，6:DELETE，7:ALTER，8:DESCRIBE，9:CLUSTER_ACTION，10:DESCRIBE_CONFIGS，11:ALTER_CONFIGS，12:IDEMPOTEN_WRITE)
     * @param integer $PermissionType 权限类型(0:UNKNOWN，1:ANY，2:DENY，3:ALLOW)
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Principal",$param) and $param["Principal"] !== null) {
            $this->Principal = $param["Principal"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("PermissionType",$param) and $param["PermissionType"] !== null) {
            $this->PermissionType = $param["PermissionType"];
        }
    }
}
