<?php

return array(
    'required'                 => '字段 {field} 必填',
    'valid_email'              => '字段 {field} 必须是一个有效的邮箱地址',
    'max_len'                  => '字段 {field} 不能大于 {param} 个字符',
    'min_len'                  => '字段 {field} 不能小于 {param} 个字符',
    'exact_len'                => '字段 {field} 必须恰好是 {param} 个字符',
    'between_len'              => '字段 {field} 必须介于 {param[0]}-{param[1]} 个字符之间',
    'alpha'                    => '字段 {field} 只能包含字母',
    'alpha_numeric'            => '字段 {field} 只能包含字母和数字',
    'alpha_numeric_space'      => '字段 {field} 只能包含字母、数字和空格',
    'alpha_numeric_dash'       => '字段 {field} 只能包含字母、数字、中划线(-)和下划线(_)',
    'alpha_dash'               => '字段 {field} 只能包含字母、中划线(-)和下划线(_)',
    'alpha_space'              => '字段 {field} 只能包含字母和空格',
    'numeric'                  => '字段 {field} 必须是一个数字',
    'integer'                  => '字段 {field} 必须是一个整数',
    'boolean'                  => '字段 {field} 必须是布尔值',
    'float'                    => '字段 {field} 必须是小数',
    'valid_url'                => '字段 {field} 必须是一个有效的网址',
    'url_exists'               => '字段 {field} 网址不存在',
    'valid_ip'                 => '字段 {field} 必须是一个有效的IP地址',
    'valid_ipv4'               => '字段 {field} 必须是一个有效的IPv4地址',
    'valid_ipv6'               => '字段 {field} 必须是一个有效的IPv6地址',
    'guidv4'                   => '字段 {field} 必须是一个有效的GUID',
    'valid_cc'                 => '字段 {field} 不是一个有效的信用卡账号',
    'valid_name'               => '字段 {field} 应该是一全名',
    'contains'                 => '字段 {field} 只能是以下其中之一: {param}',
    'contains_list'            => '字段 {field} 不是一个有效的值',
    'doesnt_contain_list'      => '字段 {field} 包含一个不被接受的值',
    'street_address'           => '字段 {field} 必须是一个有效的街道地址，注：不适用于中文）',
    'date'                     => '字段 {field} 必须是一个有效的日期',
    'min_numeric'              => '字段 {field} 必须是一个数字, 且大于等于 {param}',
    'max_numeric'              => '字段 {field} 必须是一个数字, 且小于等于 {param}',
    'min_age'                  => '字段 {field} 需要是个大于等于 {param} 的年龄',
    'starts'                   => '字段 {field} 需要以 {param} 开始',
    'extension'                => '字段 {field} 只支持以下文件格式: {param}，注：不检查Mime-Type',
    'required_file'            => '字段 {field} 文件上传不成功',
    'equalsfield'              => '字段 {field} 不等于字段 {param}',
    'iban'                     => '字段 {field} 必须是一个有效的国际银行帐户号码(IBAN)',
    'phone_number'             => '字段 {field} 必须是一个有效的手机号码',
    'regex'                    => '字段 {field} 必须是一个有效格式的值',
    'valid_json_string'        => '字段 {field} 必须是一个有效的JSON字符串',
    'valid_array_size_greater' => '字段 {field} 必须是一个数组，且至少有 {param} 个元素',
    'valid_array_size_lesser'  => '字段 {field} 必须是一个数组，且最多有 {param} 个元素',
    'valid_array_size_equal'   => '字段 {field} 必须是一个数组，且有 {param} 个元素',
);
