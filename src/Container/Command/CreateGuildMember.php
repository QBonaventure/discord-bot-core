<?php
namespace FTCBotCore\Container\Command;


use Psr\Container\ContainerInterface;
use FTCBotCore\Command\CreateGuildMember as CreateGuildMemberInstance;
use FTC\Discord\Model\Aggregate\GuildMemberRepository;

class CreateGuildMember
{
    
    public function __invoke(ContainerInterface $container)
    {
        $repository = $container->get(GuildMemberRepository::class);
        return new CreateGuildMemberInstance($repository);
    }
    
}
