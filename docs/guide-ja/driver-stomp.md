Stomp �h���C�o
==============


���̃h���C�o�� ActiveMQ �L���[�œ��삵�܂��B

`enqueue/stomp` �p�b�P�[�W��K�v�Ƃ��܂��B

�\����:

```php
return [
    'bootstrap' => [
        'queue', // �R���|�[�l���g�����g�̃R���\�[���E�R�}���h��o�^���܂�
    ],
    'components' => [
        'queue' => [
            'class' => \flip_id\yii2_queue\stomp\Queue::class,
            'host' => 'localhost',
            'port' => 61613,
            'queueName' => 'queue',
        ],
    ],
];
```

�R���\�[��
----------

�L���[�ɓ����ꂽ�W���u�����s���邽�߂ɃR���\�[���E�R�}���h���g�p����܂��B

```sh
yii queue/listen [timeout]
```

`listen` �R�}���h�͖����ɃL���[�𒲂ב�����f�[�������N�����܂��B�L���[�ɐV�����^�X�N������ƁA�����Ɏ擾����A���s����܂��B
`timeout` �p�����[�^�̓L���[�𒲂ׂ�Ԃ̃X���[�v�̕b�����w�肷����̂ł��B
���̃R�}���h�� [supervisor](worker.md#supervisor) �܂��� [systemd](worker.md#systemd) �ɂ���ēK�؂Ƀf�[����������̂��A
�ł������I�ȕ��@�ł��B
