import type { UserType } from "../types/UserType";

interface UserProps {
  user: UserType;
}

export function User({ user }: UserProps) {
  return (
    <tr>
      <td>{user.id}</td>
      <td>{user.name}</td>
      <td>{user.email}</td>
    </tr>
  );
}