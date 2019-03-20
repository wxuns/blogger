<?php
/**
 * Created by L.
 * Author: wxuns
 * Link: https://www.wxuns.cn
 * Date: 2019/2/27
 * Time: 10:02.
 */
if (!function_exists('Request')) {
    function Request($request)
    {
        if ($request->isGet()) {
            return $request->getQuery();
        } else {
            parse_str(file_get_contents('php://input'), $data);

            return $data;
        }
    }
}
/**
 * to json
 */
if (!function_exists('toJson')) {
    function toJson($data)
    {
        $serializer = JMS\Serializer\SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($data, 'json');
        echo $jsonContent; // or return it in a Response
    }
}