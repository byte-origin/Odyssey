create table servers (
    name varchar(25) default 'Odyssey Knockoff Server' not null,
    id text not null,
    invite text[] not null,
    creator text[] not null,
    icon_path text not null,
    time_created timestamp not null,
    member_count integer not null,
    settings jsonb default '{"Test": "Finish this"}' not null,
    roles jsonb default '{"Test": "Finish this"}' not null,
    channels jsonb default '{"Test": "Finish this"}' not null
);


CREATE TABLE IF NOT EXISTS members (
    user_id bigint REFERENCES users(id) ON DELETE CASCADE,
    guild_id bigint REFERENCES guilds(id) ON DELETE CASCADE, 
    nickname text DEFAULT NULL,
    joined_at timestamp without time zone default (now() at time zone 'utc'),
    deafened boolean DEFAULT false,
    muted boolean DEFAULT false,
    PRIMARY KEY(user_id, guild_id)
);