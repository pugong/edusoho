<?php

namespace Topxia\Service\IM\Dao;

interface ConversationMemberDao
{
    public function getMember($id);

    public function getMemberByConvNoAndUserId($convNo, $userId);

    public function findMembersByConvNo($convNo);

    public function addMember($member);

    public function deleteMember($id);

    public function deleteMemberByConvNoAndUserId($convNo, $userId);

    public function searchImMembers($conditions, $orderBy, $start, $limit);

    public function searchImMemberCount($conditions);
}
