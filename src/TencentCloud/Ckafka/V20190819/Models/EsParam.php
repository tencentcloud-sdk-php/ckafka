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
 * Es类型入参
 *
 * @method string getResource() 获取Es实例资源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(string $Resource) 设置Es实例资源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取Es的连接port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置Es的连接port
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取Es用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置Es用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取Es密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置Es密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSelfBuilt() 获取是否为自建集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceVip() 获取实例vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceVip(string $ServiceVip) 设置实例vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取实例的vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置实例的vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDropInvalidMessage() 获取Es是否抛弃解析失败的消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropInvalidMessage(boolean $DropInvalidMessage) 设置Es是否抛弃解析失败的消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndex() 获取Es自定义index名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置Es自定义index名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDateFormat() 获取Es自定义日期后缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDateFormat(string $DateFormat) 设置Es自定义日期后缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentKey() 获取非json格式数据的自定义key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentKey(string $ContentKey) 设置非json格式数据的自定义key
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDropInvalidJsonMessage() 获取Es是否抛弃非json格式的消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropInvalidJsonMessage(boolean $DropInvalidJsonMessage) 设置Es是否抛弃非json格式的消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocumentIdField() 获取转储到Es中的文档ID取值字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocumentIdField(string $DocumentIdField) 设置转储到Es中的文档ID取值字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexType() 获取Es自定义index名称的类型，STRING，JSONPATH，默认为STRING
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexType(string $IndexType) 设置Es自定义index名称的类型，STRING，JSONPATH，默认为STRING
注意：此字段可能返回 null，表示取不到有效值。
 * @method DropCls getDropCls() 获取当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropCls(DropCls $DropCls) 设置当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabasePrimaryKey() 获取转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabasePrimaryKey(string $DatabasePrimaryKey) 设置转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method FailureParam getDropDlq() 获取死信队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropDlq(FailureParam $DropDlq) 设置死信队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecordMappingList() 获取使用数据订阅格式导入 es 时，消息与 es 索引字段映射关系。不填默认为默认字段匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordMappingList(array $RecordMappingList) 设置使用数据订阅格式导入 es 时，消息与 es 索引字段映射关系。不填默认为默认字段匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDateField() 获取消息要映射为 es 索引中 @timestamp 的字段，如果当前配置为空，则使用消息的时间戳进行映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDateField(string $DateField) 设置消息要映射为 es 索引中 @timestamp 的字段，如果当前配置为空，则使用消息的时间戳进行映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordMappingMode() 获取用来区分当前索引映射，属于新建索引还是存量索引。"EXIST_MAPPING"：从存量索引中选择；"NEW_MAPPING"：新建索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordMappingMode(string $RecordMappingMode) 设置用来区分当前索引映射，属于新建索引还是存量索引。"EXIST_MAPPING"：从存量索引中选择；"NEW_MAPPING"：新建索引
注意：此字段可能返回 null，表示取不到有效值。
 */
class EsParam extends AbstractModel
{
    /**
     * @var string Es实例资源Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var integer Es的连接port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string Es用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string Es密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var boolean 是否为自建集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfBuilt;

    /**
     * @var string 实例vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceVip;

    /**
     * @var string 实例的vpcId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var boolean Es是否抛弃解析失败的消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropInvalidMessage;

    /**
     * @var string Es自定义index名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string Es自定义日期后缀
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DateFormat;

    /**
     * @var string 非json格式数据的自定义key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentKey;

    /**
     * @var boolean Es是否抛弃非json格式的消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropInvalidJsonMessage;

    /**
     * @var string 转储到Es中的文档ID取值字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocumentIdField;

    /**
     * @var string Es自定义index名称的类型，STRING，JSONPATH，默认为STRING
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexType;

    /**
     * @var DropCls 当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropCls;

    /**
     * @var string 转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabasePrimaryKey;

    /**
     * @var FailureParam 死信队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropDlq;

    /**
     * @var array 使用数据订阅格式导入 es 时，消息与 es 索引字段映射关系。不填默认为默认字段匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordMappingList;

    /**
     * @var string 消息要映射为 es 索引中 @timestamp 的字段，如果当前配置为空，则使用消息的时间戳进行映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DateField;

    /**
     * @var string 用来区分当前索引映射，属于新建索引还是存量索引。"EXIST_MAPPING"：从存量索引中选择；"NEW_MAPPING"：新建索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordMappingMode;

    /**
     * @param string $Resource Es实例资源Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port Es的连接port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName Es用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password Es密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SelfBuilt 是否为自建集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceVip 实例vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId 实例的vpcId
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DropInvalidMessage Es是否抛弃解析失败的消息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Index Es自定义index名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DateFormat Es自定义日期后缀
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentKey 非json格式数据的自定义key
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DropInvalidJsonMessage Es是否抛弃非json格式的消息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocumentIdField 转储到Es中的文档ID取值字段名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexType Es自定义index名称的类型，STRING，JSONPATH，默认为STRING
注意：此字段可能返回 null，表示取不到有效值。
     * @param DropCls $DropCls 当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabasePrimaryKey 转储到ES的消息为Database的binlog时，如果需要同步数据库操作，即增删改的操作到ES时填写数据库表主键
注意：此字段可能返回 null，表示取不到有效值。
     * @param FailureParam $DropDlq 死信队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecordMappingList 使用数据订阅格式导入 es 时，消息与 es 索引字段映射关系。不填默认为默认字段匹配
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DateField 消息要映射为 es 索引中 @timestamp 的字段，如果当前配置为空，则使用消息的时间戳进行映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordMappingMode 用来区分当前索引映射，属于新建索引还是存量索引。"EXIST_MAPPING"：从存量索引中选择；"NEW_MAPPING"：新建索引
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("DropInvalidMessage",$param) and $param["DropInvalidMessage"] !== null) {
            $this->DropInvalidMessage = $param["DropInvalidMessage"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("DateFormat",$param) and $param["DateFormat"] !== null) {
            $this->DateFormat = $param["DateFormat"];
        }

        if (array_key_exists("ContentKey",$param) and $param["ContentKey"] !== null) {
            $this->ContentKey = $param["ContentKey"];
        }

        if (array_key_exists("DropInvalidJsonMessage",$param) and $param["DropInvalidJsonMessage"] !== null) {
            $this->DropInvalidJsonMessage = $param["DropInvalidJsonMessage"];
        }

        if (array_key_exists("DocumentIdField",$param) and $param["DocumentIdField"] !== null) {
            $this->DocumentIdField = $param["DocumentIdField"];
        }

        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("DropCls",$param) and $param["DropCls"] !== null) {
            $this->DropCls = new DropCls();
            $this->DropCls->deserialize($param["DropCls"]);
        }

        if (array_key_exists("DatabasePrimaryKey",$param) and $param["DatabasePrimaryKey"] !== null) {
            $this->DatabasePrimaryKey = $param["DatabasePrimaryKey"];
        }

        if (array_key_exists("DropDlq",$param) and $param["DropDlq"] !== null) {
            $this->DropDlq = new FailureParam();
            $this->DropDlq->deserialize($param["DropDlq"]);
        }

        if (array_key_exists("RecordMappingList",$param) and $param["RecordMappingList"] !== null) {
            $this->RecordMappingList = [];
            foreach ($param["RecordMappingList"] as $key => $value){
                $obj = new EsRecordMapping();
                $obj->deserialize($value);
                array_push($this->RecordMappingList, $obj);
            }
        }

        if (array_key_exists("DateField",$param) and $param["DateField"] !== null) {
            $this->DateField = $param["DateField"];
        }

        if (array_key_exists("RecordMappingMode",$param) and $param["RecordMappingMode"] !== null) {
            $this->RecordMappingMode = $param["RecordMappingMode"];
        }
    }
}
