<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\EchoBot;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    //'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: '<your channel token>',
                    //'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '<your channel secret>',
                    'channelToken' => '7qgyjO/ZAdW9A43t+LjnGj1zobjnSntBJFej1R6U1nJjCHjLEfz62VlYvd0VudxWHIXK9s8DBLTnznmRl/sR7tYX3hpIAPdBbR99LdT9I7n4wMU6O+4icH62ZU6tRtNWOvemSy6diDL8PjYhJUi0XQdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => '0e1d15257511eed1e2eb096702cc04d6',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
